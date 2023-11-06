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
            'file' => 'required|max:600',
            'content' => 'required|string',
            'title' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect('/admin/hero/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $file = $request->file('image'); 
        $storedPath = $file->store('public/back/images/hero'); 
        $model->image_path = $storedPath;
        $model->save();

        $hero = Hero::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $request->input('file'),
        ]);

        return response()->json([
            'message' => 'Kayıt başarılı!',
            'user' => $hero,
        ], 201);
    }
}
