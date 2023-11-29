<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Why_Choose;

class WhyController extends Controller
{
    public function index(){
        $why = Why_Choose::where('is_active', false)->get();
        return view('back.why.index',compact('why'));
    }
    public function detail($id){
        $why = Why_Choose::where('is_active', false)->find($id);
        if($why === null){
            return redirect('/admin/why/');
        }
        else{

            return view('back.why.detail', compact('why'));
        }
    }
    public function update($id){
        $why = Why_Choose::where('is_active', false)->find($id);
        return view('back.why.update',compact('why'));
    }
    public function update_post(Request $request){
        $id= $request->input('id');
        $why = Why_Choose::where('is_active', false)->find($id);
        if($request->input('title')!=$why->title){
            $why->title=$request->input('title');
        }
        if($request->input('content')!=$why->content){
            $why->content=$request->input('content');
        }
        $why->save();
        return redirect('/admin/why'); 
    }
}
