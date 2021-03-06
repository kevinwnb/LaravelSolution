<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Demo";
        return view('pages/index');
    }

    public function about(){
        $title = "About us";
        return view('pages/about');
    }

    public function services(){
        $title = "Services";
        return view('pages/services');
    }
}
