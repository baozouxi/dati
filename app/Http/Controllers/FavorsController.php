<?php

namespace App\Http\Controllers;

use App\Models\Passage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorsController extends Controller
{
    public function store(Request $request, int $id)
    {

        $status = 'error';

        $passage = Passage::findOrFail($id);

        $favor = $passage->favors()->create([
            'user_id' => Auth::user()->id,

        ]);

        if ($favor) {
            $status = 'ok';
        }


        return json_encode(compact('status'));

    }

}
