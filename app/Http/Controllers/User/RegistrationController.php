<?php

namespace App\Http\Controllers\User;

use App\Mail\Samyotech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //

    public function index()
    {
        echo " this is index registration";
        Mail::to("test@gmail.com")->send(new Samyotech());

    }
}
