<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ResultController extends Controller
{
    public function qcorrect(){
        $qans = DB::select('select * from qualitative_analysis where setid="1"');
        $qans1 = DB::select('select * from qualitatives where id="1"');
        $cans = DB::select('select * from comprehension where setid="1"');
        $cans1 = DB::select('select * from qualitatives where id="1"');
        $crans = DB::select('select * from creative_test where setid="1"');
        $crans1 = DB::select('select * from qualitatives where id="1"');
        $anans = DB::select('select * from analytical_test where setid="1"');
        $anans1 = DB::select('select * from qualitatives where id="1"');
        //return array_pop($qans);
       return view('final',['qans'=>$qans,'qans1'=>$qans1,'cans'=>$cans,'cans1'=>$cans1,'crans'=>$crans,'crans1'=>$crans1,'anans'=>$anans,'anans1'=>$anans1]);
       
       
    }
}
