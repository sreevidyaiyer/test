<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitative;
use Illuminate\Support\Facades\Input;
use Redirect;
use View;

class QualitativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->all();
       $rating = Qualitative::firstOrNew(['id' =>'1']);
      $data=input::all('value');
     // return ($data);
      //$count=1;
      $name=array_keys($data);
      $count=count($name);
     // return $name;
     for($d=1;$d<=$count;$d=$d+1)
     // foreach($name as $n)
      {
            $rating->id= 1;
            $f="SEC1_ANS".$name[$d-1];
            $rating->$f = $data[$name[$d-1]];
           // echo " <br> ".$f." ";
            //echo $data[$name[$d-1]];    
       }
      //  $count=$count+1;
        $rating->save();
        $section='Qualitative';
        return view('viewfinal',['section'=>$section]);
      

    /*  $data = array(
        'title'=>'My App',
        'Description'=>'This is New Application',
        'author'=>'foo'
        );
     //   return View::make("/final", compact('data')); 
     
        return View::make('final')->with($data);*/
    }

    public function edit($id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
