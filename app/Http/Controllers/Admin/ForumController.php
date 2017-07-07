<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Forum;
class ForumController extends Controller
{

    public function index()
    {

        $data=Forum::all()->toArray();
//        dd($data);
        return view('Fourm/show',compact("data"));
    }
    public function create()
    {
        return view('Fourm/create');
    }
    public function store(Request $request)
    {
        $forum=new Forum();
        $forum->title=$request->title;
        $forum->details= $request->details;
        $forum->save();
        redirect('Fourm');

    }

}
