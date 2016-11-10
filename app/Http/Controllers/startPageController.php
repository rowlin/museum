<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class startPageController extends Controller
{
    public function index(){
        return view('start');
    }
}
