<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function qualitative(){
        $users = DB::select('select * from qualitative_analysis where setid="1"');
        return view('qualitative',['users'=>$users]);
    }
    public function creativity(){
        $users1 = DB::select('select * from creative_test where setid="1"');
        return view('creativity',['users1'=>$users1]);
    }
    public function analytical(){
        $users2 = DB::select('select * from analytical_test where setid="1"');
        return view('analytical',['users2'=>$users2]);
    }

    public function comprehension(){
        $users3 = DB::select('select * from comprehension where setid="1"');
        return view('comprehension',['users3'=>$users3]);
    }
}
