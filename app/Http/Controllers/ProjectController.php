<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectPhoto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function all()
    {
        return Project::all()->map(function (Project $p) {
            $p->projectPhotos;
            return $p;
        });
    }

    function get(?int $id)
    {
        $p = Project::query()->find($id);
        $p->projectPhotos;

        return $p;
    }

    function photo(?int $id)
    {
        return response()->file(storage_path() . '/photos/project_' . $id);
    }

    function projectPhoto(?int $id)
    {
        return response()->file(storage_path() . '/photos/project_photo_' . $id);
    }

    function sendPhoto(Request $r, ?int $id)
    {
        $content = json_decode($r->getContent());
        $b64Photo = base64_decode($content->photo);

        if (!file_exists(storage_path() . '/photos/project_' . $id)) {
            touch(storage_path() . '/photos/project_' . $id);
        }

        $f = file_put_contents(storage_path() . '/photos/project_' . $id, $b64Photo);
        // fwrite($f, $b64Photo);
    }


    function save(Request $r)
    {
        $b = json_decode($r->getContent());
        $savedProject = Project::query()
            ->updateOrCreate([
                'id' => isset($b->id) ? $b->id : null
            ], (array) $b);

        foreach ($b->project_photos as $p) {
            $p->project_id = $savedProject->id;




            if (isset($p->photo) && $p->photo != null) {
                $b64Photo = base64_decode((explode('base64,', $p->photo))[1]);

                // dd($b64Photo);

                unset($p->photo);

                $savedPhoto = ProjectPhoto::query()->updateOrCreate(['id' => null,], ['project_id' => $savedProject->id]);

                if (!file_exists(storage_path() . '/photos/project_photo_' . $savedPhoto->id)) {
                    touch(storage_path() . '/photos/project_photo_' . $savedPhoto->id);
                }

                $f = file_put_contents(storage_path() . '/photos/project_photo_' . $savedPhoto->id, $b64Photo);
            }
        }

        return response($savedProject);
    }
}
