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
                @if($single)
                    Name: {{$single->name}}<br>
                    Percent: {{$single->percent}}<br>
                    Color: {{$single->color}}<br>
                    Icon: {{$single->icon}}<br>
                @else
                    {{"There are no single chart"}}
                @endif
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color:pink;">
                @if($model)
                    @foreach($model as $m)
                        Name: {{$m->name}}<br>
                        Percent: {{$m->percent}}<br>
                        Color: {{$m->color}}<br>
                        Icon:{{$m->icon}}<br><br><br><br>
                    @endforeach
                @else
                    {{"There are no multi chart"}}
                @endif
            </div>
        </div>
    </div>
@endsection
