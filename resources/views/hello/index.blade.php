@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <form action="/hello/add" method="post">
    @csrf
  <table>
    <tr>
      <th>Name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>Mail</th>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <th>Age</th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th>
        <td><input type="submit" value="send!"></td>
      </th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
  </form>
@endsection
@section('footer')
copyright 2020 tuyano.
@endsection