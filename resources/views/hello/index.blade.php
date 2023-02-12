@extends('layouts.helloapp')
<style>
  .pagenation {font-size: 10px;}
  .pagination li {display: inline-block;}
</style>

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
    @csrf
  <table>
    <tr>
      <th>Name</th>
      <th>Mail</th>
      <th>Age</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
  {{$items->links()}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection