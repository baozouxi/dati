<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Label;
use Illuminate\Support\Facades\Auth;

class LabelsController extends Controller
{
    public function index(Request $request)
    {
        $labels = New Label();

        if ($request->has('checked')) {
            $labels = $labels->where('checked', (int)$request->input('checked'));
        }

        $labels = $labels->with('user')->get();

        $labels->map(function ($item) {
            $item['author'] = $item->user->name;
        });


        $labels = $labels->toJson();
        return view('admin.label.list', compact('labels'));
    }


    public function update(Label $label, Request $request)
    {
        $check = (int)$request->input('checked');

        $label->checked = $check;

        $status = 'error';
        if ($label->save()) {
            $status = 'ok';
        }

        return json_encode(compact('status'));


    }


    public function create()
    {
        return view('label.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|string|',
        ], [
            'content.required' => '请输入标签'
        ]);

        $request['user_id'] = Auth::user()->id;

        if (Label::create($request->all())) {
            return view('check');
        }

        return '发布失败';


    }


    public function destroy(Label $label)
    {
        $status = 'error';
        if ($label->delete()) {
            $status = 'ok';
        }

        return json_encode(compact('status'));
    }


    public function check(int $id)
    {
        $status = 'error';
        if ((new Label())->check($id)) {
            $status = 'ok';
        }
        return json_encode(compact('status'));
    }
}



