<?php

namespace App\controllers\seller;

use App\models\ProductCategory;
use Illuminate\framework\Controller;
use Illuminate\framework\Debug;
use Illuminate\framework\factory\Model;
use Illuminate\framework\Request;
use Illuminate\framework\Response;

class ApiController extends Controller
{
    public function store()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $agency = [
            'site_user_id' => $data['site_user_id'],
            'name_shop' => array_pop($data)
        ];

        Model::create('Agency', $agency);


        Model::create('Role', $data);

        Response::json([
            'status' => 200,
            'message' => 'Tạo thành công',
            'data' => $data,
        ], 200);
    }
}
