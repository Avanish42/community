<?php

namespace App\Http\Controllers\User;

use App\Mail\Samyotech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Model\People;
use Illuminate\Support\Facades\Mail;
class RegistrationController extends Controller
{


    public function index()
    {
        return view('User/show');
//        Mail::to("test@gmail.com")->send(new Samyotech());

    }
    public function login()
    {
        return view('User/login');

    }
    public function store(Request $request)

    {
        $people = new People();

        $people->email=$request->email;
        $people->mobile=$request->mobile;
        $people->password=bcrypt($request->password);
    //    dd($people->toArray());

        $people->save();
        return back()->with('returnStatus', true)->with('status', 101)->with('message', 'Category Added successfully');
    }




}
