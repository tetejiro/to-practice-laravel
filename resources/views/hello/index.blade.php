@extends('layouts.helloapp')
<style>
  .pagenation {font-size: 10px;}
  .pagination li {display: inline-block;}
  tr th a:link {color: white;}
  tr th a:visited {color: white;}
  tr th a:hover {color: white;}
  tr th a:active {color: white;}
</style>

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  @if(Auth::check())
  <p>USER: {{$user->name.'('.$user->email.')'}}</p>
  @else
  <p>
    ※ログインしていません。
    (<a href="/login">ログイン</a>|<a href="/register">登録</a>)
  </p>
  @endif
  <table>
    <tr>
      <th><a href="/hello?sort=name">Name</a></th>
      <th><a href="/hello?sort=mail">Mail</a></th>
      <th><a href="/hello?sort=age">Age</a></th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
  {{$items->appends(['sort' => $sort])->links()}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

<script>
  window.addEventListener('load', function() {
    let a = document.getElementsByClassName('w-5 h-5');
    a[0].style.display = 'inline-block';
    a[0].style = "height: 10px";
    a[1].style.display = 'inline-block';
    a[1].style = "height: 10px";
  })
</script>