@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要なだけ記述できます。</p>

  @include('components.message', ['msg_title'=>'OK',
    'msg_content'=>'サブビューです。'
  ])

@endsection