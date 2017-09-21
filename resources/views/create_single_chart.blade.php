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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['url' => '/create-single-chart']) !!}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Name *</label>
                            <input name="name" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Percent *</label>
                            <input name="percent" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Color *</label>
                            <input name="color" type="color" value="#ff0000" class="form-control required color-picker">
                        </div>
                        <div class="form-group">
                            <label>Icon *</label>
                            <div>
                                <input type="text" class="icon-class-input form-control required" name="icon" value="fa fa-music" />
                                <button type="button" class="btn btn-primary picker-button">Choose an Icon</button>
                                <span class="demo-icon"></span>
                            </div>

                            <div id="iconPicker" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Icon Picker</h4>
                                        </div>
                                        <div class="modal-body custom-modal-body">
                                            <div>
                                                <ul class="icon-picker-list">
                                                    <li>
                                                        <a data-class="item activeState" data-index="dindex">
                                                            <span class="item"></span>
                                                            <span class="name-class">item</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="change-icon" class="btn btn-success">
                                                <span class="fa fa-check-circle-o"></span>
                                                Use Selected Icon
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Create Chart</strong></button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
