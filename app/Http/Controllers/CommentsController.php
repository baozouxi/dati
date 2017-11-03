<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Passage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{


    public function store(Request $request, int $id)
    {
        $passage  = Passage::findOrFail($id);

        $this->validate($request, [
            'content' => 'required|string|min:10'
        ],[
            'content.required' => '请输入评论内容',
            'content.min' => '最少10个字符'
        ]);


        $request['user_id'] = Auth::user()->id;
        $request['passage_id'] = $passage->id;

        if (Comment::create($request->all())) {
            return redirect()->back();
        }

        return '评论失败';

    }



}
