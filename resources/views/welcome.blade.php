@extends('layouts.app') 

@section('content')

    <h1>隨機題庫系統</h1>

    @section('my_menu')
    <li><a class="nav-link" href="/home">新增題庫</a></li>
    @parent 
@stop

@endsection