@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Create your chart
                    <hr>
                    {!! Form::open(['url' => '/create-single-chart']) !!}
                    <div class="panel">
                        <div class="row" >
                            <div class="col-lg-3"><b>Name</b><br><input type="text" name="name" placeholder="Name"></div>
                            <div class="col-lg-3"><b>Percent</b><br><input type="text" name="percent" placeholder="Percent"></div>
                            <div class="col-lg-3"><b>Color</b><br><input type="color" name="color" placeholder="Color"></div>
                            <div class="col-lg-3"><b>Icon</b><br><input type="text" name="icon" placeholder="Icon"></div>
                        </div>
                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        <div class="row">
                            <input type="submit" name="submit" value="Add Chart">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
