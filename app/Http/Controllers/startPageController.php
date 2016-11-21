<?php

namespace App\Http\Controllers;
use App\Slider;
use App\EventModel;
use Illuminate\Http\Request;

class startPageController extends Controller
{
    public function index(){
        $slider = Slider::all();
           $EventModels = EventModel::all();
        foreach($EventModels as $event){
            $event_to_calendar[] = \Calendar::event(
                $event->name,
                false,
                $event->start,
                $event->end,
                $event->id
            );
        }

        $calendar = \Calendar::addEvents($event_to_calendar);

        return view('start', compact('slider', 'calendar'));
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
