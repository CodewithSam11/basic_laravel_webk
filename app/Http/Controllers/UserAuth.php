<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserCreated;

class UserAuth extends Controller
{
    //
    public function index()
    {
        event( new UserCreated('Email has been sent'));
        return view('home');
    }
}
