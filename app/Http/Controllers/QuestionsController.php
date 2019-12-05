<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function qualitative(){
        $users = DB::select('select * from qualitative_analysis');
        return view('qualitative',['users'=>$users]);
    }
    public function creativity(){
        $users1 = DB::select('select * from creative_test');
        return view('creativity',['users1'=>$users1]);
    }
    public function analytical(){
        $users2 = DB::select('select * from analytical_test');
        return view('analytical',['users2'=>$users2]);
    }

    public function comprehension(){
        $users3 = DB::select('select * from comprehension');
        return view('comprehension',['users3'=>$users3]);
    }
}
