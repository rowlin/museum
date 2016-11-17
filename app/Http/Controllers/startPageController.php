<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;

class startPageController extends Controller
{
    public function index(){
        $slider = Slider::all();
        return view('start', compact('slider'));
    }
}
