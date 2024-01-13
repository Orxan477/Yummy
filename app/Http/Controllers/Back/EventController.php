<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $event= Event::where('is_active',false)->get();
        return view('back.event.index',compact('event'));
    }
    public function detail(){
        $event= Event::where('is_active',false)->find(1);
        if($event === null){
            return abort(404);
        }
        else{
            return view('back.event.detail',compact('event'));
        }
    }
}
