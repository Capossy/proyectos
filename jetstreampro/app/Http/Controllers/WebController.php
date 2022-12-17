<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function contactenos()
    {
        return view('contact');
    }
    public function canales()
    {
        return view('canales');
    }
}