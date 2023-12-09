<?php

namespace App\controllers\API;

use App\models\ProductCategory;
use Illuminate\framework\Controller;
use Illuminate\framework\Debug;
use Illuminate\framework\factory\Model;
use Illuminate\framework\Request;
use Illuminate\framework\Response;

class ProductController extends Controller
{
    public function getProduct()
    {
        $data = Model::all('Product');

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? (object) $data : null,
        ], !empty($data) ? 200 : 404);
    }

    public function getProductCategory()
    {
        $data = Model::all('ProductCategory');

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? $data : null,
        ], !empty($data) ? 200 : 404);
    }

    public function getProductDetail()
    {
        $products = Model::all('Product');

        foreach ($products as $product) {

            if (isset($product['id'])) {
                $item = Model::where('ProductDetail', ['id' => $product['id']]);

                foreach ($item as $key => $value) {
                    $productDetail[] = $value;
                }
            }
        }

        Response::json([
            'status' => !empty($productDetail) ? 200 : 404,
            'message' => !empty($productDetail) ? 'Success' : 'Not Found',
            'data' => !empty($productDetail) ? (object) $productDetail : null,
        ], !empty($productDetail) ? 200 : 404);
    }

    public function getProductMedia()
    {
        $products = Model::all('Product');

        foreach ($products as $product) {

            if (isset($product['id'])) {
                $item = Model::where('ProductMedia', ['product_id' => $product['id']]);

                foreach ($item as $key => $value) {
                    $url = $_SERVER['DOCUMENT_ROOT'] . $value['url'];
                    $file = file_get_contents($url);
                    $img = base64_encode($file);
                    $productMedia[] = $img;
                }
            }
        }

        Response::json([
            'status' => !empty($productMedia) ? 200 : 404,
            'message' => !empty($productMedia) ? 'Success' : 'Not Found',
            'data' => !empty($productMedia) ? (object) $productMedia : null,
        ], !empty($productMedia) ? 200 : 404);
    }

    public function getProductMore()
    {
        $products = Model::all('Product');

        foreach ($products as $product) {

            if (isset($product['id'])) {
                $item = Model::where('ProductMore', ['id' => $product['id']]);

                foreach ($item as $key => $value) {
                    $productMore[] = $value;
                }
            }
        }

        Response::json([
            'status' => !empty($productMore) ? 200 : 404,
            'message' => !empty($productMore) ? 'Success' : 'Not Found',
            'data' => !empty($productMore) ? (object) $productMore : null,
        ], !empty($productMore) ? 200 : 404);
    }

    public function getProductConfiguration()
    {
        $ProductConfiguration = Model::all('ProductConfiguration');

        Response::json([
            'status' => !empty($ProductConfiguration) ? 200 : 404,
            'message' => !empty($ProductConfiguration) ? 'Success' : 'Not Found',
            'data' => !empty($ProductConfiguration) ? (object) $ProductConfiguration : null,
        ], !empty($ProductConfiguration) ? 200 : 404);
    }

    public function getProductVariation()
    {
        $ProductVariation = Model::all('VariationOption');

        Response::json([
            'status' => !empty($ProductVariation) ? 200 : 404,
            'message' => !empty($ProductVariation) ? 'Success' : 'Not Found',
            'data' => !empty($ProductVariation) ? (object) $ProductVariation : null,
        ], !empty($ProductVariation) ? 200 : 404);
    }

    public function store(Request $request)
    {
        if (!$request->isPost()) {
            Response::json([
                'status' => 405,
                'message' => 'Method Not Allowed',
                'data' => null
            ], 405);
        } else {

            $data = $request->getData();

            $lastIdProduct = Model::create('Product', $data['product']);

            foreach ($data['product_media'] as &$media) {
                $comma_position = strpos($media['url'], ',');

                if ($comma_position !== false) {
                    $substring = substr($media['url'], $comma_position + 1);
                    $file_name = 'image_' . uniqid() . '.' . $request->getImageExtensionFromBase64($media['url']);
                    $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $file_name;
                    file_put_contents($upload_path, base64_decode($substring));
                    $store_path = $_SERVER['DOCUMENT_ROOT'] . '/store/upload/' . $file_name;
                    copy($upload_path, $store_path);
                    $media['url'] = '/upload/' . $file_name;
                }
            }

            foreach ($data['product_media'] as &$media) {
                $media['product_id'] = $lastIdProduct;
            }

            $successProductMedia = Model::createFor('ProductMedia', $data['product_media']);

            $data['product_detail']['product_id'] = $lastIdProduct;

            foreach ($data['product_detail'] as &$item) {
                if (is_array($item)) {
                    $item = json_encode($item, JSON_UNESCAPED_UNICODE);
                }
            }

            $lastIdProductDetail = Model::create('ProductDetail', $data['product_detail']);

            if ($data['variation_option']) {

                foreach ($data['variation_option'] as &$media) {
                    $comma_position = strpos($media['image'], ',');

                    if ($comma_position !== false) {
                        $substring = substr($media['image'], $comma_position + 1);
                        $file_name = 'image_' . uniqid() . '.' . $request->getImageExtensionFromBase64($media['image']);
                        $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $file_name;
                        file_put_contents($upload_path, base64_decode($substring));
                        $media['image'] = '/upload/' . $file_name;
                    }
                }

                $dataV = [];

                foreach ($data['variation_option'] as $item) {
                    foreach ($item as $key => $value) {
                        $con = Model::where('Variation', ['name' => $key]);
                        if ($con) {
                            $dataV = [
                                'variation_id' => $con[0]['id'],
                                'value' => $value,
                            ];
                            $lastIdVariationOption = Model::create('VariationOption', $dataV);
                        }
                    }
                }

                $data['product_configuration'] = [];
                $variationAll = Model::all('Variation');

                for ($i = 0; $i < (count($variationAll) * count($data['variation_option'])); $i++) {
                    $data['product_configuration'][] = [
                        'product_detail_id' => $lastIdProductDetail,
                        'variation_option_id' => (int) $lastIdVariationOption - $i,
                    ];
                }

                Model::createFor('ProductConfiguration', $data['product_configuration']);
            }

            foreach ($data['shipping_method'] as &$ship) {
                $ship['product_id'] = $lastIdProduct;
            }

            $successShippingMethod = Model::createFor('ShippingMethod', $data['shipping_method']);

            $data['product_more']['product_id'] = $lastIdProduct;
            $successProductMore = Model::create('ProductMore', $data['product_more']);

            if (
                $successProductMedia &&
                $successShippingMethod &&
                $successProductMore
            ) {
                Response::json([
                    'status' => 201,
                    'message' => 'Resource created successfully',
                ], 201);
            } else {
                Response::json([
                    'status' => 400,
                    'message' => 'Bad Request',
                ], 400);
            }
        }
    }

    public function update(Request $request)
    {
        if (!$request->isPost()) {
            Response::json([
                'status' => 405,
                'message' => 'Method Not Allowed',
                'data' => null
            ], 405);
        } else {
            $id = $request->getParam();
            $data = $request->getData();

            $lastIdProduct = Model::update('Product', $id, $data['product']);

            foreach ($data['product_media'] as &$media) {
                $comma_position = strpos($media['url'], ',');

                if ($comma_position !== false) {
                    $substring = substr($media['url'], $comma_position + 1);
                    $file_name = 'image_' . uniqid() . '.' . $request->getImageExtensionFromBase64($media['url']);
                    $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $file_name;
                    file_put_contents($upload_path, base64_decode($substring));
                    $store_path = $_SERVER['DOCUMENT_ROOT'] . '/store/upload/' . $file_name;
                    copy($upload_path, $store_path);
                    $media['url'] = '/upload/' . $file_name;
                }
            }

            foreach ($data['product_media'] as &$media) {
                $media['product_id'] = $lastIdProduct;
            }

            $successProductMedia = Model::updateFor('ProductMedia', $id, $data['product_media']);

            $data['product_detail']['product_id'] = $lastIdProduct;

            foreach ($data['product_detail'] as &$item) {
                if (is_array($item)) {
                    $item = json_encode($item, JSON_UNESCAPED_UNICODE);
                }
            }

            $lastIdProductDetail = Model::update('ProductDetail', $id, $data['product_detail']);

            if ($data['variation_option']) {

                foreach ($data['variation_option'] as &$media) {
                    $comma_position = strpos($media['image'], ',');

                    if ($comma_position !== false) {
                        $substring = substr($media['image'], $comma_position + 1);
                        $file_name = 'image_' . uniqid() . '.' . $request->getImageExtensionFromBase64($media['image']);
                        $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $file_name;
                        file_put_contents($upload_path, base64_decode($substring));
                        $media['image'] = '/upload/' . $file_name;
                    }
                }

                $dataV = [];

                foreach ($data['variation_option'] as $item) {
                    foreach ($item as $key => $value) {
                        $con = Model::where('Variation', ['name' => $key]);
                        if ($con) {
                            $dataV = [
                                'variation_id' => $con[0]['id'],
                                'value' => $value,
                            ];
                            $lastIdVariationOption = Model::update('VariationOption', $id, $dataV);
                        }
                    }
                }

                $data['product_configuration'] = [];
                $variationAll = Model::all('Variation');

                for ($i = 0; $i < (count($variationAll) * count($data['variation_option'])); $i++) {
                    $data['product_configuration'][] = [
                        'product_detail_id' => $lastIdProductDetail,
                        'variation_option_id' => (int) $lastIdVariationOption - $i,
                    ];
                }

                Model::updateFor('ProductConfiguration', $id, $data['product_configuration']);
            }

            foreach ($data['shipping_method'] as &$ship) {
                $ship['product_id'] = $lastIdProduct;
            }

            $successShippingMethod = Model::updateFor('ShippingMethod', $id, $data['shipping_method']);

            $data['product_more']['product_id'] = $lastIdProduct;
            $successProductMore = Model::update('ProductMore', $id, $data['product_more']);

            if (
                $successProductMedia &&
                $successShippingMethod &&
                $successProductMore
            ) {
                Response::json([
                    'status' => 201,
                    'message' => 'Resource created successfully',
                ], 201);
            } else {
                Response::json([
                    'status' => 400,
                    'message' => 'Bad Request',
                ], 400);
            }
        }
    }

    public function softDelete(Request $request)
    {
        $id = $request->getParam('id');

        if ($id) {
            $product = Model::find('Product', $id);

            if ($product) {
                $data = Model::softDelete('Product', $id);

                if ($data) {
                    Response::json([
                        'status' => 200,
                        'message' => 'Soft delete successful',
                    ], 200);
                } else {
                    Response::json([
                        'status' => 404,
                        'message' => 'Product not found',
                    ], 404);
                }
            }
        } else {
            Response::json([
                'status' => 400,
                'message' => 'Bad Request - Missing ID parameter',
            ], 400);
        }
    }

    public function searchByName(Request $request)
    {
        $slug = $request->getParam();

        $data = Model::where('Product', ['slug' => ('%' . $slug . '%')], 'LIKE');

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? (object) $data : null,
        ], !empty($data) ? 200 : 404);
    }

    public function showProduct(Request $request)
    {
        $slug = $request->getParam();

        $data = Model::where('Product', ['slug' => $slug]);

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? (object) $data : null,
        ], !empty($data) ? 200 : 404);
    }

    public function showProductDetail(Request $request)
    {
        $product_id = $request->getParam();

        $data = Model::where('ProductDetail', ['product_id' => $product_id]);

        Response::json([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Success' : 'Not Found',
            'data' => !empty($data) ? (object) $data : null,
        ], !empty($data) ? 200 : 404);
    }
}
