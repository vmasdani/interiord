<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function all()
    {
        return Project::all();
    }
    function save(Request $r)
    {
        $b = json_decode($r->getContent());
        return response(Project::query()
            ->updateOrCreate([
                'id' => isset($b->id) ? $b->id : null
            ], (array) $b));
    }

}