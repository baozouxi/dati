<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Passage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            $item->labels()->each(function ($lable) use (&$labels) {
                $labels[] = $lable->content;
            });
            $item['labels_arr'] = implode('、', $labels);
        });
        return view('passage.list', compact('passages'));

    }


    public function show(Passage $passage)
    {
        if ($passage->checked !== 1) {
            return redirect('/');
        }

        $passage = $passage->load(['comments', 'comments.user']);

        $liked = false; //是否点赞


        if (Auth::check()) {
            $current_user_favors = Auth::user()->load([
                'favors' => function ($query) use ($passage) {
                    $query->where('passage_id', '=', $passage->id);
                }
            ]);

            if (!$current_user_favors->favors->isEmpty()) {

                $liked = true;
            }
        }

        return view('passage.show', compact('passage', 'liked'));

    }


    public function create()
    {
        $labels = Label::where('checked', 1)->get();
        return view('passage.create', compact('labels'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'author' => 'required',
            'from' => 'required',
            'spans' => 'array|min:1'
        ], [
            'content.required' => '请输入金句内容',
            'author.required' => '请输入金句内容',
            'from.required' => '请输入金句内容',
        ]);

        $request['user_id'] = Auth::user()->id;



        if ( $passage =  Passage::create($request->all())) {

            //添加标签模型关系
            if($request->has('spans')){
                //简单处理下 labelID
                $temp_id_arr = [];
                foreach ($request->spans as $span) {
                    $temp_id_arr[] = Label::find($span);
                }
                $passage->labels()->saveMany($temp_id_arr);
            }


            return view('check');
        }






        return '发布失败';

    }


    //过审  管理员用
    public function check(int $id)
    {
        $status = 'fail';
        if ((new Passage())->check($id)) {
            $status = 'ok';
        }

        return json_encode(compact('status'));

    }


}
