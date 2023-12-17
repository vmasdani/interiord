<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductionProcessPhoto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductionProcessPhotoController extends BaseController
{
    function all()
    {
        return ProductionProcessPhoto::all();
    }

    function prodProcessPhoto(?int $id)
    {
        // dd('a');
        // dd(storage_path() . '/photos/prod_process_photo_' . $id);
        // dd($id);
        return response()->file(storage_path() . '/photos/prod_process_photo_' . $id);
    }

    function save(Request $r)
    {
        $b = json_decode($r->getContent());

        foreach ($b as $p) {
            $savedProductionProcessPhoto = ProductionProcessPhoto::query()
                ->updateOrCreate([
                    'id' => isset($p->id) ? $p->id : null
                ], (array) $p);

            if (isset($p->photo) && $p->photo != null) {
                $b64Photo = base64_decode((explode('base64,', $p->photo))[1]);

                // dd($b64Photo);

                unset($p->photo);

                // $savedPhoto = ProductionProcessPhoto::query()
                //     ->updateOrCreate(
                //         ['id' =>    null,],
                //         ['project_id' => $savedProductionProcessPhoto->id]
                //     );

                if (!file_exists(storage_path() . '/photos/prod_process_photo_' . $savedProductionProcessPhoto->id)) {
                    touch(storage_path() . '/photos/prod_process_photo_' . $savedProductionProcessPhoto->id);
                }

                $f = file_put_contents(storage_path() . '/photos/prod_process_photo_' . $savedProductionProcessPhoto->id, $b64Photo);
            }
        }

        // return response($savedProject);
    }
}
