<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FaqController extends Controller
{
    public function index(){
        $faq=Feedback::where('is_active',false)->get();
        return view('back.faq.index',compact('faq'));
    }

    public function create(){
        return view('back.faq.create');
    }
    public function create_post(Request $request){
        dd($request);
        return;
    }
}
