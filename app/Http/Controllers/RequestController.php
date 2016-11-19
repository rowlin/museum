<?php

namespace App\Http\Controllers;

use App\Request as Req;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class RequestController extends Controller
{
    public function index(){
        $all_tickets = Req::all();
        $mail =Cookie::get('mail');
        if($mail){
           $ticket = Req::where('mail',$mail)->first();
            return view('to_request.form', compact('all_tickets','ticket'));
        }
    
            return view('to_request.form', compact('all_tickets'));
    }


    public function create(Request $request){
        $this->validate($request, [
            'mail' => 'email',
            'text' => 'max:5000'
        ]);
        $ticket = Req::where('mail', $request->mail)->delete();
        //запоминаем на 1 минуту
        Cookie::queue('mail', $request->mail, 1);
        $input = $request->all();
        Req::create($input);
        return redirect()->back();
    }

}
