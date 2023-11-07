<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistics;

class StatisticController extends Controller
{
    public function index(){
        $statistics = Statistics::where('is_active', false)->find(1);
        return view('back.statistic.index',compact('statistics'));
    }
    public function update(){
        $statistic = Statistics::where('is_active', false)->find(1);
        return view('back.statistic.update',compact('statistic'));
    }
    public function update_post(Request $request){
        $statistics = Statistics::where('is_active', false)->find(1);
        if($request->input('client')!=$statistics->client){
            $statistics->client=$request->input('client');
        }
        if($request->input('project')!=$statistics->project){
            $statistics->project=$request->input('project');
        }
        if($request->input('hours_of_project')!=$statistics->hours_of_project){
            $statistics->hours_of_project=$request->input('hours_of_project');
        }
        if($request->input('worker')!=$statistics->worker){
            $statistics->worker=$request->input('worker');
        }
        $statistics->save();
        return view('back.statistic.index',compact('statistics'));
    }
}
