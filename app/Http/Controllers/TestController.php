<?php

namespace App\Http\Controllers;
use App\product\Logic\TestLogic;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // $product = new TestLogic;
        // return $product->getName();

        // by 2nd method 
        return TestLogic::testMethod();
    }
}
