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
                @if($single)
                   <?php 
                        $num = $single->percent;
                        $percent = ($single->percent / 200) * 100;
                        if ($num > 100 && $num <=500) {
                            $percent = ($single->percent / 500) * 100;
                        }elseif ($num > 500 && $num <=1000) {
                            $percent = ($single->percent / 1000) * 100;
                        }

                        $finalP = ((200 / 100) * $percent) ;
                    ?>
                <div class="chart-box">
                    <div class="chart-item" style="background-color: {{$single->color}}; height: {{$finalP}}px">
                        <div class="chart-value">
                            <span>{{$single->percent}}</span>
                        </div>
                        <div class="chart-icon">
                            <i class="fa {{$single->icon}}" style="font-size: 20px;color: #e5e5e5 "></i>
                        </div>
                    </div>
                </div>
                @else
                    {{"There are no single chart"}}
                @endif
                
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                @if($model)
                 
                    @foreach($model as $m)
                        <?php 
                            $numM = $m->percent;
                            $percentM = ($m->percent / 200) * 100;
                            if ($numM > 100 && $numM <=500) {
                                $percentM = ($m->percent / 500) * 100;
                            }elseif ($numM > 500 && $numM <=1000) {
                                $percentM = ($m->percent / 1000) * 100;
                                
                            }

                            $finalPM = ((200 / 100) * $percentM) ;
                        ?>
                        <div class="chart-box">
                            <div class="chart-item" style="background-color: {{$m->color}}; height: {{$finalPM}}px">
                                <div class="chart-value">
                                    <span>{{$m->percent}}</span>
                                </div>
                                <div class="chart-icon">
                                    <i class="fa {{$m->icon}}" style="font-size: 20px;color: #e5e5e5 "></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                 dd($model);
                    <p>{{"There are no multi chart"}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
