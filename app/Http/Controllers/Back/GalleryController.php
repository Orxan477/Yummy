<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $gallery=Gallery::where('is_active', false)->get();
        return view('back.gallery.index',compact('gallery'));
    }

    public function create(){
        return view('back.gallery.create');
    }

    public function create_post(Request $request){
        if($request->file('name')==null){
            return redirect('/admin/gallery/create')->withErrors([
                'general' => 'Şəkil yüklənməlidir',
            ])->withInput($request->all());
        }
        $current_time=time();
        $current_time = date('Y-d-m_H:i:s',$current_time);
        $file=$request->file('name');
        $filename= $current_time.'_'.$file->getClientOriginalName();
        $file->move(public_path('/back/images/gallery'),$filename);

        $url = '/back/images/gallery/' . $filename;
        $gallery = Gallery::create([
            'name' => $url
        ]);

        return redirect('/admin/gallery');
    }
    public function update($id){
        $gallery= Gallery::where('is_active',false)->find($id);
        if($gallery === null){
            return abort(404);
        }
        else{
            return view('back.gallery.update', compact('gallery'));
        }
        return view('back.gallery.update');
    }
    public function update_post(Request $request){
        $id= $request->input('id');
        $gallery= Gallery::where('is_active',false)->find($id);
        if($gallery === null){
            return abort(404);
        }
        else{
            if($request->file('name')!=null){
                $current_time=time();
                $current_time = date('Y-d-m_H:i:s',$current_time);
                $file=$request->file('name');
                $filename= $current_time.'_'.$file->getClientOriginalName();
                $file->move(public_path('/back/images/gallery'),$filename);
        
                $gallery->name = '/back/images/gallery/' . $filename;
                $gallery->save();
            }
            return redirect('/admin/gallery'); 
         }
    }
    public function delete($id){
        $gallery= Gallery::where('is_active',false)->find($id);
        if($gallery === null){
            return abort(404);
        }
        else{
            if($gallery->is_active == false){
                $gallery->is_active=true;
            }
            $gallery->save();
        }
    }
}
