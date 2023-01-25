@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <th>Name</th>
    <th>Mail</th>
    <th>Age</th>
    @if(!empty($items))
      @foreach ($items as $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->mail}}</td>
          <td>{{$item->age}}</td>
        </tr>
      @endforeach
    @endif
  </table>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection