<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    function all()
    {
        return Product::all();
    }
    function get(?int $id)
    {
        return Product::query()->find($id);
    }


    function photo(?int $id)
    {
        return response()->file(storage_path() . '/photos/product_' . $id);
    }

    function sendPhoto(Request $r, ?int $id)
    {
        $content = json_decode($r->getContent());
        $b64Photo = base64_decode($content->photo);

        if (!file_exists(storage_path() . '/photos/product_' . $id)) {
            touch(storage_path() . '/photos/product_' . $id);
        }

        $f = file_put_contents(storage_path() . '/photos/product_' . $id, $b64Photo);
        // fwrite($f, $b64Photo);
    }



    function save(Request $r)
    {
        $b = json_decode($r->getContent());
        return response(Product::query()
            ->updateOrCreate([
                'id' => isset($b->id) ? $b->id : null
            ], (array) $b));
    }

}