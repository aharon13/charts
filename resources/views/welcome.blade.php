    @extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Last Created Charts
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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
    </div>
@endsection
