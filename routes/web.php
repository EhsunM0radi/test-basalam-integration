<?php

use App\Enums\BasalamProductStatusEnums;
use BasalamSDK\Model\UserUploadFileTypeEnum;
use Unisa\BasalamProxy\Proxies\ProductProxy;

use Illuminate\Support\Facades\Route;
use Unisa\BasalamProxy\Adapters\DefaultSdkAdapter;
use Unisa\BasalamProxy\Constants\BasalamFileTypesEnum;
use Unisa\BasalamProxy\Constants\BasalamProductUnitEnums;
use Unisa\BasalamProxy\DTOs\BinaryFileDto;
use Unisa\BasalamProxy\DTOs\CreateProductRequest;
use Unisa\BasalamProxy\Facades\Labeling;
use Unisa\BasalamProxy\Facades\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-proxy',function(){

    $productDTO = new CreateProductRequest(
        'hello',
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
        new ProductAttributes(),
        null,
        [],
        new BinaryFileDto(new SplFileObject('/home/ehsan/Downloads/58d4259c75aecd014ec175279b0e965064230037-360p.mp4','r'),BasalamFileTypesEnum::PRODUCT_VIDEO)
    );
    $prod = new stdClass();
    $prod->photo = new stdClass();
    $prod->photo->file = new SplFileObject('/home/ehsan/Downloads/bcc197a43170016e8cc943970763bd209488c46a_1709677346.jpg','r');
    $prod->photo->file_type = UserUploadFileTypeEnum::PRODUCT_PHOTO;
        Product::create(
            config('basalam-proxy.vendor_id'),
            $prod
    );
    // dd(app(ProductProxy::class));
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
