<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiDetailsController extends Controller
{

    public function index()

    {
        return  view('Api/all_apis');
    }

    public function login()
    {
      return  view('Api/login');
    }

}
