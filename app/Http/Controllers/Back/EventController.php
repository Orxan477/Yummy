<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;

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
    public function create(){
        return view('back.event.create');
    }
    public function create_event_post(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|max:600',
            'content' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|string'
        ]);
        if($request->file('image')==null){
            return redirect('/admin/event/create')->withErrors([
                'general' => 'Şəkil yüklənməlidir',
            ])->withInput($request->all());
        }
        if ($validator->fails()) {
            return redirect('/admin/event/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
        $currentTime = time(); 
        $currentTime = date('Y-m-d_H:i:s', $currentTime);
        $file = $request->file('image');
        $filename = $currentTime.'_'.$file->getClientOriginalName();
        $file->move(public_path('/back/images/event'), $filename); 

        $url = '/back/images/event/' . $filename;
        $event = Event::create([
            'name' => $request->input('name'), 
            'price' => $request->input('price'),
            'content' => $request->input('content'),
            'image' => $url,
        ]);

     return redirect("/admin/event/");
    }
}
