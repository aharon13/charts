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
            <div class="ibox-content">
                <p>
                    Chart Creation Process
                </p>
                <div id="wizard">
                    <h1>Create Chart</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md">
                            {!! Form::open(['url' => '/create-single-chart', 'id' => 'chart_form']) !!}
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input name="name" type="text" class="form-control required ch_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Percent *</label>
                                        <input name="percent" type="text" class="form-control required ch_percent">
                                    </div>
                                    <div class="form-group">
                                        <label>Color *</label>
                                        <input name="color" type="color" value="#ff0000" class="form-control required color-picker ch_color">
                                    </div>
                                    <div class="form-group">
                                        <label>Icon *</label>
                                        <div>
                                            <input type="text" class="icon-class-input form-control required ch_icon" name="icon" value="fa fa-music" />
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
                                </div>
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>

                    <h1>Finish and Embed</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md clearfix" id="ch_b">
                            
                        </div>
                        <div class="form-group">
                            <button id="save" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button"><strong>Save</strong></button>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Download as <span class="fa fa-download"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="download_jpg">JPG</a></li>
                                    <li><a href="#" class="download_pdf">PDF</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
