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
    public function getProductCategory()
    {
        $data = Model::all('ProductCategory');

        if (count($data) > 0) {
            Response::json([
                'status' => 200,
                'message' => 'Success',
                'data' => $data
            ], 200);
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Not Found',
                'data' => null
            ], 404);
        }
    }

    public function getAttributeOption(Request $request)
    {
        $param = $request->getParam();

        $dataAttributeOption = Model::where('AttributeOption', ['product_category_id' => $param]);
        $data = [];

        foreach ($dataAttributeOption as $item) {
            $data['attribute_name'][] = $item['attribute_name'];
            $data['attribute_value'][] = Model::where('AttributeOptionValue', ['attribute_option_id' => $item['id']]);
        }

        if (count($data) > 0) {
            Response::json([
                'status' => 200,
                'message' => 'Success',
                'data' => $data
            ], 200);
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Not Found',
                'data' => null
            ], 404);
        }
    }

    public function index()
    {
        $data = [];
        $products = Model::all('Product');
        foreach ($products as $key => $value) {
            $productDetail[] = Model::where('ProductDetail', ['product_id' => $products[$key]['id']]);
            $productCategory[] = Model::where('ProductCategory', ['id' => $products[$key]['product_category_id']]);
        }

        $productConfiguration = [];
        $productVariation = [];

        $check = Model::all('ProductConfiguration');
        if (count($check) !== 0) {
            foreach ($productDetail as $key => $value) {
                $productConfiguration = Model::where('ProductConfiguration', ['product_detail_id' => $value[0]['id']]);
            }

            foreach ($productConfiguration as $key => $value) {
                $productVariation[] =  Model::where('VariationOption', ['id' => $productConfiguration[$key]['variation_option_id']]);
            }
        }

        $data = [
            $products,
            $productDetail,
            $productCategory,
            $productConfiguration,
            $productVariation
        ];

        if (count($data) > 0) {
            Response::json([
                'status' => 200,
                'message' => 'Success',
                'data' => $data
            ], 200);
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Not Found',
                'data' => null
            ], 404);
        }
    }

    public function outOfStock()
    {
        $data = [];
        $productDetail[] = Model::where('ProductDetail', ['qty_in_stock' => 0]);

        foreach ($productDetail as $key => $value) {
            foreach ($value as $k => $v) {
                $products[] = Model::where('Product', ['id' => $v['id']]);
            }
        }

        foreach ($products as $key => $value) {
            foreach ($value as $k => $v) {
                $productCategory[] = Model::where('ProductCategory', ['id' => $v['product_category_id']]);
            }
        }

        $data = [
            $products,
            $productDetail,
            $productCategory
        ];

        if (count($data) > 0) {
            Response::json([
                'status' => 200,
                'message' => 'Success',
                'data' => $data
            ], 200);
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Not Found',
                'data' => null
            ], 404);
        }
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
                    $media['url'] = '/public/upload/' . $file_name;
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
                        $media['image'] = '/public/upload/' . $file_name;
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

        if (count($data) > 0) {
            Response::json([
                'status' => 200,
                'message' => 'Success',
                'data' => $data
            ], 200);
        } else {
            Response::json([
                'status' => 404,
                'message' => 'Not Found',
                'data' => null
            ], 404);
        }
    }
}
