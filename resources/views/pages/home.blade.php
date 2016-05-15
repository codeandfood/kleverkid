@extends('layouts.default')
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Welcome</h3>
      </div>
      <div class="panel-body">
      	<ul>
      		<li><a href="{{url("/")}}/register">Register</a></li>
      		<li><a href="{{url("/")}}/explore">Explore</a></li>
      	</ul>
      </div>
    </div>
    <style type="text/css">
    </style>
@stop