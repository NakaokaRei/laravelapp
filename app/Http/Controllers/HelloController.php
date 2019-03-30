<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

  public function index(){
    $data = ['msg'=>'これはbladeを使ったサンプルですよ。'];
    return view('hello.index', $data);

  }

  public function post(Request $request){
    $msg = $request->msg;
    $data = ['msg'=>'こんにちわ'. $msg];
    return view('hello.index', $data);
  }
}
