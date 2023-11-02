<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index(){
        $banner= Hero::get();
        return view('back.hero.index',compact('banner'));
    }
}
