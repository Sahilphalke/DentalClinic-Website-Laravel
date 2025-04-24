<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('aboutUs');
    }
    public function contact() {
        return view('contactUs');
    }
    public function services() {
        return view('services');
    }
    public function blog() {
        return view('blog');
    }
}
