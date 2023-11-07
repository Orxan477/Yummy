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
        $banner = Hero::where('is_active', false)->get();
        return view('back.hero.index',compact('banner'));
    }
    
    public function create(){
        return view('back.hero.create');
    }

    public function create_hero_post(Request $request){
        $validator = Validator::make($request->all(), [
            // 'image' => 'max:600',
            'content' => 'required|string',
            'title' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect('/admin/hero/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
        $currentTime = time(); 
        $currentTime = date('Y-m-d_H:i:s', $currentTime);
        $file = $request->file('image');
        $filename = $currentTime . '_' . $file->getClientOriginalName();
        $file->move(public_path('/back/images/hero'), $filename); 

        $url = '/back/images/hero/' . $filename;
        $hero = Hero::create([
            'title' => $request->input('title'), 
            'content' => $request->input('content'),
            'image' => $url,
        ]);

     return redirect("/admin/hero/");
    }
    public function detail($id){
        $banner = Hero::where('is_active', false)->find($id);
        if($banner === null){
            return redirect('/admin/hero/');
        }
        else{

            return view('back.hero.detail', compact('banner'));
        }
    }
    public function update($id){
        $banner = Hero::where('is_active', false)->find($id);
        if($banner === null){
            return abort(404);
        }
        else{
            return view('back.hero.update', compact('banner'));
        }
    }
    public function update_post(Request $request){
        $id= $request->input('id');
        $validator = Validator::make($request->all(), [
            // 'image' => 'max:600',
            'content' => 'required|string',
            'title' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/hero/update/'. $id)
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
        $banner = Hero::where('is_active', false)->find($id);
        if($banner === null){
            return abort(404);
        }
        else{
            if($request->input('image')!=null){
                $currentTime = time(); 
            $currentTime = date('Y-m-d_H:i:s', $currentTime);
            $file = $request->file('image');
            $filename = $currentTime . '_' . $file->getClientOriginalName();
            $file->move(public_path('/back/images/hero'), $filename); 

            $url = '/back/images/hero/' . $filename;
            }
            
            if($request->input('title')!=null){
                $banner->title=$request->input('title');
            }

            if($request->input('content')!=null){
                $banner->content=$request->input('content');
            }
            $banner->save();
        }
        return redirect('/admin/hero/detail/'.$id);
    }

    public function delete($id){
        $banner = Hero::where('is_active', false)->find($id);
        if($banner === null){
            return abort(404);
        }
        else{
            if($banner->is_active == false){
                $banner->is_active=true;
            }
            $banner->save();
        }
    }
}
