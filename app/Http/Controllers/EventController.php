<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventModel;
class EventController extends Controller
{
    public function index(){

    }
    
    public function calendar(){
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


        return view('calendar/index', compact('calendar'));
    }
    
    
    
}
