<?php

namespace App\controllers\API;

use Illuminate\framework\Controller;
use Illuminate\framework\Debug;
use Illuminate\framework\factory\Model;
use Illuminate\framework\Request;
use Illuminate\framework\Response;

class AttributeOptionController extends Controller
{
    public function getAttributeOption(Request $request)
    {
        $param = $request->getParam();

        $dataAttributeOption = Model::where('AttributeOption', ['product_category_id' => $param]);
        $data = [];

        foreach ($dataAttributeOption as $item) {
            $data['attribute_name'][] = $item['attribute_name'];
            $data['attribute_value'][] = Model::where('AttributeOptionValue', ['attribute_option_id' => $item['id']]);
        }

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? (object) $data : null,
        ], !empty($data) ? 200 : 404);
    }
}
