    @extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>E-commerce grid</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>E-commerce</a>
                </li>
                <li class="active">
                    <strong>Products grid</strong>
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



                            <div class="small m-t-xs">
                                Many desktop publishing packages and web page editors now.
                            </div>
                            <div class="m-t text-righ">

                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fas fa-long-arrow-alt-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

                                <a href="#" class="btn btn-xs btn-outline btn-primary">View <i class="fas fa-long-arrow-alt-right"></i> </a>
                                <a href="#" class="btn btn-xs btn-outline btn-primary">Edit <i class="fas fa-pencil-alt"></i> </a>
                                <a href="#" class="btn btn-xs btn-outline btn-danger">Delete <i class="fas fa-times"></i> </a>
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
                                <a href="#" class="btn btn-xs btn-success">Create a New Thing Chart </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                @if($single_all)
                
                   <?php 
                       foreach ($single_all as $single) {
                           $num = $single->percent;
                           $finalP = 1.5 * $num;
                    ?>
                        <div class="col-lg-12 chart-collection">
                            <div class="chart-box">
                                {{$single->title}}
                                <div class="chart-item" style="background-color: {{$single->color}}; height: {{$finalP}}px">
                                    <div class="chart-value">
                                        <span>{{$single->percent}}</span>
                                    </div>
                                    <div class="chart-icon">
                                        <i class="fa {{$single->icon}}" style="font-size: 20px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                       }  
                    ?>
                
                @else
                    {{"There are no single chart"}}
                @endif
                
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                @if(sizeof($model_all) != 0)
                     @foreach($model_all as $model)
                     <div class="col-lg-12 chart-collection">
                        @foreach($model as $m)
                            <?php 
                                
                                $numM = $m['percent'];
                                
                                $finalPM = 1.5 * $numM;
                            ?>
                            
                            <div class="chart-box">
                                <div class="chart-item" style="background-color: {{$m['color']}}; height: {{$finalPM}}px">
                                    <div class="chart-value">
                                        <span>{{$m['percent']}}</span>
                                    </div>
                                    <div class="chart-icon">
                                        <i class="fa {{$m['icon']}}" style="font-size: 20px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                    @endforeach
                @else
                    <p>{{"There are no multi chart"}}</p>
                @endif
            </div>
        </div>
    </div> -->
@endsection
