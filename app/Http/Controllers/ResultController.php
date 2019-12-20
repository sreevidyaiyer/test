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
        //return array_pop($qans);
       return view('final',['qans'=>$qans,'qans1'=>$qans1]);
       
       
    }
}
