    @extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Welcome in INSPINIA Laravel Starter Project
                    </h1>
                    <small>
                        It is an application skeleton for a typical web app. You can use it to quickly bootstrap your webapp projects.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color:yellow;">
                Name: {{$single->name}}<br>
                Percent: {{$single->percent}}<br>
                Color: {{$single->color}}<br>
                Icon: {{$single->icon}}<br>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color:pink;">
                @foreach($model as $m)
                    Name: {{$m->name}}<br>
                    Percent: {{$m->percent}}<br>
                    Color: {{$m->color}}<br>
                    Icon:{{$m->icon}}<br><br><br><br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bar Chart Example</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-bar-chart"></div>
                            </div>
                    </div>
                </div>
            </div>
@endsection
