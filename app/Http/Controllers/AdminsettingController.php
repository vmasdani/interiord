<?php

namespace App\Http\Controllers;

use App\Models\Adminsetting;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminsettingController extends BaseController
{
    function first()
    {
        return Adminsetting::query()->first();
    }
    function save(Request $r)
    {
        $b = json_decode($r->getContent());
        return response(Adminsetting::query()
            ->updateOrCreate([
                'id' => isset($b->id) ? $b->id : null
            ], (array) $b));
    }

}