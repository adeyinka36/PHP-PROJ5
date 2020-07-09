<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index ( Request $request){
           
          $path= $request->path();
          
        return view("index",["path"=>$path]);
    }

    public function dogs ( Request $request){
           
        $path= $request->path();
        
      return view("dogs",["path"=>$path]);
  }

  public function cats ( Request $request){
           
    $path= $request->path();
    
  return view("cats",["path"=>$path]);
}


}
