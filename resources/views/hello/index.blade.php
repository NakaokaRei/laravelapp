<<<<<<< HEAD
@extends('layouts.helloapp')

@section('menubar')
  @parent
  インデックスのページ
@endsection


@section('title', 'Index')

@section('content')
  <p>ここが本文のコンテンツ</p>
  <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2017 rei.
@endsection
=======
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello/Index</title>
    <style media="screen">
    body{font-size: 16pt; color: #999;}
    h1{font-size: 100pt; text-align: right; color: #f6f6f6; margin: -50px 0px -100px 0px;}
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>foreachの例ですよ。</p>
    <ol>
      @foreach($data as $item)
      <li>{{$item}}</li>
      @endforeach
    </ol>
  </body>
</html>
>>>>>>> master
