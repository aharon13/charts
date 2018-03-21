@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>My Charts Gallery</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="active">
                    <strong>My Charts Gallery</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation">
                            [ INFO ]
                        </div>
                        <div class="product-desc">
                            <span class="product-price">
                                $10
                            </span>
                            <small class="text-muted">Category</small>
                            <a href="#" class="product-name"> Product</a>



                            <div class="small m-t-xs insp-description">
                                Many desktop publishing packages and web page editors now.
                            </div>
                            <div class="m-t text-righ">

                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if($single_all->count() > 0){
                    
                
                    foreach ($single_all as $single) {
                        $num = $single->percent;
                        $finalP = 1.5 * $num;
            ?>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div class="product-imitation">
                                    [ INFO ]
                                </div>
                                <div class="product-desc">
                                    <small class="text-muted">Category</small>
                                    <a href="#" class="product-name"> {{$single->title}}</a>
                                    <div class="small m-t-xs insp-description">
                                        {{$single->description}}
                                    </div>
                                    <div class="m-t text-center">

                                        <a href="#" class="btn btn-xs btn-outline btn-primary pull-left">View <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Edit <i class="fa fa-pencil"></i> </a>
                                        <!-- <a href="SingleChart/{{ $single->id }}" data-method="destroy" data-token="{{csrf_token()}}" data-confirm="Are you sure?">hhhhh</a> -->
                                        <a href="#" class="btn btn-xs btn-outline btn-danger pull-right" style="visibility: hidden;">Delete <i class="fa fa-times"></i> </a>
                                        {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'SingleChart.destroy', $single->id ] ]) }}
                                        {{ Form::hidden('id', $single->id) }}
                                        {{ Form::button('Delete <i class="fa fa-times"></i>', array('type' => 'submit', 'class' => 'btn btn-xs btn-outline btn-danger pull-right form-delete-button')) }}
                                        {{ Form::close() }}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
            <?php

                foreach($model_all as $model){
                    $r = $model[0];

            ?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                <small class="text-muted">Category</small>
                                <a href="#" class="product-name">{{$r['title']}}</a>
                                <div class="small m-t-xs insp-description">
                                    {{$r['description']}}
                                </div>
                                <div class="m-t text-center">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary pull-left">View <i class="fa fa-long-arrow-right"></i> </a>
                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Edit <i class="fa fa-pencil"></i> </a>
                                    <!-- <a href="SingleChart/{{ $single->id }}" data-method="destroy" data-token="{{csrf_token()}}" data-confirm="Are you sure?">hhhhh</a> -->
                                    <a href="#" class="btn btn-xs btn-outline btn-danger pull-right" style="visibility: hidden;">Delete <i class="fa fa-times"></i> </a>
                                    {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'MultiCharts.destroy', $r['data_id'] ] ]) }}
                                    {{ Form::hidden('id', $r['data_id']) }}
                                    {{ Form::button('Delete <i class="fa fa-times"></i>', array('type' => 'submit', 'class' => 'btn btn-xs btn-outline btn-danger pull-right form-delete-button')) }}
                                    {{ Form::close() }}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation">
                            [ INFO ]
                        </div>
                        <div class="product-desc">
                            <span class="product-price">
                                $10
                            </span>
                            <small class="text-muted">Category</small>
                            <a href="#" class="product-name"> Product</a>



                            <div class="small m-t-xs">
                                Many desktop publishing packages and web page editors now.
                            </div>
                            <div class="m-t text-center">

                                <a href="#" class="btn btn-xs btn-outline btn-primary pull-left">View <i class="fa fa-long-arrow-right"></i> </a>
                                <a href="#" class="btn btn-xs btn-outline btn-primary">Edit <i class="fa fa-pencil"></i> </a>
                                <a href="#" class="btn btn-xs btn-outline btn-danger pull-right">Delete <i class="fa fa-times"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation">
                            <h2>This is looking
                            <p><strong style="font-size: 34px;">empty</strong></p></h2>
                            <br/>
                        </div>
                        <div class="product-desc">
                            <div class="m-t text-center">
                                <a href="{{ url('/createchart') }}" class="btn btn-xs btn-success">Create a New Thing Chart </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
