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
