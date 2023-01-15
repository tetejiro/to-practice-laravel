@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  <form method="POST" action="/hello">
    @if(count($errors) > 0)
      <p>入力に問題があります。再入力してください。</p>
    @endif
  <form action="/hello" method="post">
  <table>
    @csrf
    @if($errors->has('msg'))
      <tr>
        <th>エラー</th>
        <td>{{$errors->first('msg')}}</td>
      </tr>
    @endif
    <tr>
      <th>エラー</th>
      <td><input type="text" name="msg" value="{{old('msg')}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="submit"></td>
    </tr>
  </table>
  </form>
@endsection