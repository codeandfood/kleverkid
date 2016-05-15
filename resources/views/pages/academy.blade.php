@extends('layouts.default')
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Academy Details</h3>
      </div>
      <div class="panel-body">
        <div class="row">
        	<div class="col-md-12">

        	<div class="jumbotron">
		        <h2>{{$data->academy_name}}</h2>
		        <p class="lead">{{$data->description}}</p>
            <div class="row">
              <div class="col-md-2 sub-rows">
                  <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  Timeslots: 
              </div>
              <div class="col-md-10 sub-rows">
                  <span class="">{{$data->timeslots}}</span>
              </div>

              <div class="col-md-2 sub-rows">
                  <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                  Phone: 
              </div>
              <div class="col-md-10 sub-rows">
                <span class="">{{$data->phone}}</span>
              </div>

              <div class="col-md-2 sub-rows">
                  <span class="glyphicon glyphicon-envelope"></span>
                  Email: 
              </div>
              <div class="col-md-10 sub-rows">
                <span class="">{{$data->email}}</span>
              </div>

              <div class="col-md-2 sub-rows">
                    <span class="glyphicon glyphicon-tag"></span>
                    Tags: 
              </div>
              <div class="col-md-10 sub-rows">
                    @foreach ($data->tags as $tag)
                    <span class="tags">{{$tag->name}}</span>
                    @endforeach
              </div>
            </div>
	      	</div>

        	<div class="row imagesrow">
        		@foreach ($data->images as $value)
	            <div class="col-xs-6 col-lg-4">
	              <img width="100%" src="../storage/app/images/academy/{{ $value->url }}" >
	            </div><!--/.col-xs-6.col-lg-4-->
	            @endforeach
	        </div>
        	</div>
        </div>
      </div>
    </div>
    <style type="text/css">
      .jumbotron{
        padding: 20px 30px !important;
      }
      .tags{
        background-color: #525252;
        border-radius: 10px;
        color: #ffffff;
        padding:2px 10px;
      }
      .sub-rows{
        margin: 5px 0px;
        font-size: 16px;
      }
      .imagesrow{
        background-color: #eee;
        margin: 2px;
        border-radius: 8px;
        padding: 18px 0px;
      }
    </style>
@stop