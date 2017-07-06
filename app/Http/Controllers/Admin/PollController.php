<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PollController extends Controller
{


    public function index()
    {
        return view('poll/show');

    }
    public function create()
    {
        return view('poll/create');

    }
    public function store(Request $request)
    {
        dd($request);

    }
}
