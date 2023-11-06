<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Validator;
use DateTime;
use DateTimeZone;


class HeroController extends Controller
{
    public function index(){
        $banner= Hero::get();
        return view('back.hero.index',compact('banner'));
    }
    
    public function create(){
        return view('back.hero.create');
    }

    public function create_hero_post(Request $request){
        $validator = Validator::make($request->all(), [
            // 'file' => 'max:600',
            'content' => 'required|string',
            'title' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect('/admin/hero/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $currentTime = time(); 
        $currentTime = date('Y-m-d_H:i:s', $currentTime);
        $file = $request->file('image');
        $filename = $currentTime . '_' . $file->getClientOriginalName();
        $file->move(public_path('back/images/hero'), $filename); 

        $url = 'back/images/hero/' . $filename;
        $hero = Hero::create([
            'title' => $request->input('title'), 
            'content' => $request->input('content'),
            'image' => $url,
        ]);

        return response()->json([
            'message' => 'Kayıt başarılı!',
            'user' => $hero,
        ], 201);
    }
}
