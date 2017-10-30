<?php

namespace App\Http\Controllers\Admin;

use App\Models\Passage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassagesController extends Controller
{
    public function index(Request $request)
    {

        $passages = new Passage();

        if ($request->has('checked')) {
            $passages = $passages->where('checked', (int)$request->input('checked'));
        }
        $passages = $passages->with('user', 'labels')->get();

        $passages->map(function ($item) {
            $item['author'] = $item->user->name;
            $labels = [];
            $item->labels()->each(function($lable) use (&$labels){
                $labels[] = $lable->content;
            });
            $item['labels_arr'] = implode('、', $labels);
        });


        return view('admin.passage.list', compact('passages'));
    }


    public function update(Passage $passage, Request $request)
    {
        $check = (int)$request->input('checked');
        $status = 'error';
        $passage->checked = $check;
        if ($passage->save()) {
            $status = 'ok';
        }

        return json_encode(compact('status'));
    }

    public function destroy($id)
    {
        $passage = Passage::findOrFail($id);
        $status = '删除失败，请稍后重试';
        if ($passage->delete()) {
            $status = 'ok';
        }

        return json_encode(compact('status'));

    }


}
