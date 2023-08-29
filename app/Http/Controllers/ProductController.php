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
    function save(Request $r)
    {
        $b = json_decode($r->getContent());
        return response(Product::query()
            ->updateOrCreate([
                'id' => isset($b->id) ? $b->id : null
            ], (array) $b));
    }

}