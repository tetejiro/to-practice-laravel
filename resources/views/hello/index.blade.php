@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer Value<br>'view_message' = {{$view_message}}</p>
@endsection