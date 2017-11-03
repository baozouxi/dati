<?php

namespace App\Http\Controllers;

use App\Models\Passage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $passages = Passage::where('checked', '1')->withCount(['comments', 'favors'])->with(['user'])->get();


        return view('home.index', compact('passages'));
    }
}
