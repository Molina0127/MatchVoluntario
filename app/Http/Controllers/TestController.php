<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('site.test');
    }

    public function invoke() {
        return view('site.test2');
    }
    
    public function show() {
        return view('site.newHome');
    }

}

