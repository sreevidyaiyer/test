<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitative;
use Illuminate\Support\Facades\Input;
use Redirect;
use View;

class AutoSubmitController extends Controller
{
    public function qsubmit(Request $request)
    {
       //return $request->all();
       $rating = Qualitative::firstOrNew(['id' =>'1']);
      $data=input::all('value');
      echo "AutoSubmit in qualitative";
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
           echo " <br> ".$f." ";
            echo $data[$name[$d-1]];    
       }
      //  $count=$count+1;
        $rating->save();
        return redirect()->route('final');
     }

     public function csubmit(Request $request)
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
             $f="CRE_ANS".$name[$d-1];
             $rating->$f = $data[$name[$d-1]];
            // echo " <br> ".$f." ";
             //echo $data[$name[$d-1]];    
        }
       //  $count=$count+1;
         $rating->save();
         echo "Comp";
         return redirect()->route('final');
      }

      public function osubmit(Request $request)
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
              $f="COMP_ANS".$name[$d-1];
              $rating->$f = $data[$name[$d-1]];
             // echo " <br> ".$f." ";
              //echo $data[$name[$d-1]];    
         }
        //  $count=$count+1;
          $rating->save();
          echo "Creative";
          return redirect()->route('final');
       }

       public function asubmit(Request $request)
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
               $f="ANA_ANS".$name[$d-1];
               $rating->$f = $data[$name[$d-1]];
              // echo " <br> ".$f." ";
               //echo $data[$name[$d-1]];    
          }
         //  $count=$count+1;
           $rating->save();
           echo "analytical";
           return redirect()->route('final');
        }
}
