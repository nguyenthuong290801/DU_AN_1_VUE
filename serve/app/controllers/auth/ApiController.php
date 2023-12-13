<?php

namespace App\controllers\auth;

use DateTime;
use DateTimeZone;
use Illuminate\framework\Controller;
use Illuminate\framework\Request;
use Illuminate\framework\Response;
use Illuminate\framework\Sms;
use OTPHP\TOTP;
use Illuminate\framework\factory\Model;

class ApiController extends Controller
{

    public function index()
    {
        $phoneNumber = json_decode(file_get_contents("php://input"), true);
        $numberPhone = '+84' . $phoneNumber;

        $secret = $this->generateSecretKey();
        $otp = $this->generateOTP($secret);

        $dataOtp = [
            'otp' => $otp,
            'secret' => $secret
        ];

        $createOtp = Model::create('OtpAuth', $dataOtp);

        if (empty($createOtp)) {
            $message = 'Your OTP is: ' . $otp;
        }

        $data = '';
        // $data = new Sms($numberPhone, 'Shopee', $message);

        if ($data == 'PENDING') {
            $msg = 'SMS is pending for processing.';
        } elseif ($data == 'REJECTED') {
            $msg = 'SMS rejected.';
        } elseif ($data == 'DELIVERED') {
            $msg = 'SMS sent successfully!';
        } else {
            $msg = 'Unknown status.';
        }

        Response::json([
            'status' => 200,
            'message' => $msg,
            'data' => $secret
        ], 200);
    }

    public function generateSecretKey()
    {
        return TOTP::create()->getSecret();
    }

    public function generateOTP($secret)
    {
        $otp = TOTP::create($secret);
        return $otp->now();
    }

    public function verifyOTP()
    {
        $Data = json_decode(file_get_contents("php://input"), true);

        $verifySecret = Model::where('OtpAuth', ['secret' => $Data[0]]);

        $createdDateTime = new DateTime($verifySecret[0]['created_at']);
        $currentDateTime = new DateTime();

        $createdDateTimestamp = $createdDateTime->getTimestamp();
        $currentDateTimestamp = $currentDateTime->getTimestamp();

        $timeDifferenceInSeconds = $currentDateTimestamp - $createdDateTimestamp;

        $timeDifferenceInMinutes = floor($timeDifferenceInSeconds / 60);

        if ($timeDifferenceInMinutes <= 2) {
            if ($verifySecret[0]['otp'] == $Data[1]) {
                Response::json([
                    'status' => 200,
                    'message' => 'Success',
                    'data' => true
                ], 200);
            }
        } else {
            Response::json([
                'status' => 200,
                'message' => 'Failed',
                'data' => false
            ], 200);
        }
    }

    public function store()
    {
        $Data = json_decode(file_get_contents("php://input"), true);
        $check = Model::where('SiteUser', ['phone_number' => $Data['phone_number']]);

        foreach ($Data as $key => &$value) {
            if ($key == 'password') {
                $value = password_hash($value, PASSWORD_DEFAULT);
            }
        }

        if (count($check) <= 0) {
            Model::create('SiteUser', $Data);
        }
    }

    public function update()
    {
        $Data = json_decode(file_get_contents("php://input"), true);
        $check = Model::where('SiteUser', ['phone_number' => $Data['phone_number']]);

        foreach ($Data as $key => &$value) {
            if ($key == 'password') {
                $value = password_hash($value, PASSWORD_DEFAULT);
            }
        }

        if (count($check) == 1) {
            Model::update('SiteUser', $check[0]['id'], $Data);
        }
    }

    public function storeFacebook()
    {
        $Data = json_decode(file_get_contents("php://input"), true);

        $check = Model::where('SiteUserFacebook', ['user_facebook_id' => $Data['user_facebook_id']]);

        if (count($check) <= 0) {
            Model::create('SiteUserFacebook', $Data);

            Response::json([
                'status' => 200,
                'message' => 'Đăng nhập thành công',
                'data' => $Data,
            ], 200);
        }
    }

    public function login()
    {
        $Data = json_decode(file_get_contents("php://input"), true);

        $user = Model::where('SiteUser', ['phone_number' => $Data['phone_number']]);

        if (count($user) > 0) {
            $hashedPassword = $user[0]['password'];
            $providedPassword = $Data['password'];

            if (password_verify($providedPassword, $hashedPassword)) {
                $_SESSION['user_id'] = $user[0]['id'];

                Response::json([
                    'status' => 201,
                    'message' => 'Đăng nhập thành công',
                    'data' => $user[0],
                ], 200);
            } else {
                Response::json([
                    'status' => 401,
                    'message' => 'Sai mật khẩu',
                    'data' => null,
                ], 401);
            }
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Người dùng không tồn tại',
                'data' => null,
            ], 404);
        }
    }
}
