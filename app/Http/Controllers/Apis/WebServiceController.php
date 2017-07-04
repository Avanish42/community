<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebServiceController extends Controller
{
    //
    public function index()

    {
       return  view('Api/all_apis');
    }
}
