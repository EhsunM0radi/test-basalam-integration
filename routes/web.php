<?php

use Illuminate\Support\Facades\Route;
use Unisa\BasalamProxy\Constants\BasalamFileTypesEnum;
use Unisa\BasalamProxy\Constants\BasalamOrderStatusEnums;
use Unisa\BasalamProxy\Constants\BasalamProductStatusEnums;
use Unisa\BasalamProxy\Constants\BasalamProductUnitEnums;
use Unisa\BasalamProxy\DTOs\BinaryFileDto;
use Unisa\BasalamProxy\DTOs\ProductDto;
use Unisa\BasalamProxy\Facades\Labeling;
use Unisa\BasalamProxy\Facades\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-proxy',function(){

    // dd(Product::read(22636064));

    $productDTO = new ProductDto(
        'فیگور ددپول ۲',
        BasalamProductStatusEnums::AVAILABLE,
        '50',
        BasalamProductUnitEnums::ITEM,
        null,
        false,
        '1',
        70,
        'description of this product',
        1,
        20,
        500000,
        new BinaryFileDto(new SplFileObject('/home/ehsan/Downloads/bcc197a43170016e8cc943970763bd209488c46a_1709677346.jpg','r'),BasalamFileTypesEnum::PRODUCT_PHOTO),
        [],
        [["attribute_id"=>277,"value" => "شش در هشت","selected_values" => null]],
        null,
        [],
        null
    );

    Product::create(
        config('basalam-proxy.vendor_id'),
        $productDTO
    );

    // Product::getAttributes('فیگور ددپول');

});

Route::get('temp',function(){
    $client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://uploadio.basalam.com/v3/files', [
  'multipart' => [
    [
        'name' => 'file',
        'filename' => 'bcc197a43170016e8cc943970763bd209488c46a_1709677346.jpg',
        'contents' => fopen('/home/ehsan/Downloads/bcc197a43170016e8cc943970763bd209488c46a_1709677346.jpg','r'),
        'headers' => [
                'Content-Type' => 'image/jpeg'
        ]
    ],
    [
        'name' => 'file_type',
        'contents' => 'product.photo'
    ]
    ],
    'headers' => [
        'Accept' => 'application/json',
        'authorization' => config('basalam-proxy.access_token'),
    ],
    ]);
    dd($response,$response->getBody(),json_decode($response->getBody(), true));
});
