<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $about= About::where('is_active',false)->get();
        return view('back.about.index',compact('about'));
    }
    public function detail(){
        $about= About::where('is_active',false)->find(1);
        if($about === null){
            return abort(404);
        }
        else{
            return view('back.about.detail',compact('about'));
        }
    }
    public function update(){
        $about= About::where('is_active',false)->find(1);
        if($about === null){
            return abort(404);
        }
        else{
            return view('back.about.update',compact('about'));
        }
    }
    public function update_post(Request $request){
        $gallery= About::where('is_active',false)->find(1);

        if($request->file('image_main')!=null){
            $current_time=time();
            $current_time = date('Y-d-m_H:i:s',$current_time);
            $file=$request->file('image_main');
            $filename= $current_time.'_'.$file->getClientOriginalName();
            $file->move(public_path('/back/images/about'),$filename);
    
            $gallery->image_main = '/back/images/about/' . $filename;
        }
        if($request->file('image')!=null){
            $current_time=time();
            $current_time = date('Y-d-m_H:i:s',$current_time);
            $file=$request->file('image');
            $filename= $current_time.'_'.$file->getClientOriginalName();
            $file->move(public_path('/back/images/about'),$filename);
    
            $gallery->image = '/back/images/about/' . $filename;
        }
        if($request->input('content')!=null){
            $gallery->content=$request->input('content');
        }
        $gallery->save();
        return redirect('/admin/about/detail');
    }
}
