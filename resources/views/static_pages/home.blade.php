@extends('layouts.default')
@section('title','这是首页的标题')
@section('content')
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
  <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
  </p>
  
  </div>
 
@stop