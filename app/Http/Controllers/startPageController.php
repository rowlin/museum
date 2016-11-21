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

    public function vizit(){
        return view('pages.vizit');
    }

    public function donation(){
        return view('pages.donation');
    }

    public function about(){
        return view('pages.about');

    }

    public function buy_ticket(){
        return view('pages.buy_ticket');
    }
}
