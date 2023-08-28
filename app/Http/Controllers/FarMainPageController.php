<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarMainPageController extends Controller
{
    public function index()
    {
        return view('far-mainpage');
    }
}