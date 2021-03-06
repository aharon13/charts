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

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>My Charts Gallery</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="{{ url('/createchart') }}">Create Thing Chart</a>
            </li>
            <li class="active">
                <strong>Single Thing Chart</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-content">
            {!! Form::open(['url' => '/create-single-chart', 'id' => 'form']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="chart-title-form">
                            <div class="form-group">
                                <label>Title of Chart:</label> 
                                <input name="title" type="text" class="form-control required ch_title">
                            </div>
                            <div class="form-group">
                                <label>Short Description (Max 140 chars)</label> 
                                <input name="description" type="text" class="form-control required">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="preview_main_area">
                            <span class="text-center">Preview</span>
                            <div class="all_ch_preview_area">
                                <div class="ch_title_area">
                                    <span class="ch_template_title">Template1</span>
                                </div>
                                <div class="ch_preview_area" data-action="0">
                                    <div class="chart-box">
                                        <div class="chart-item" data-action="0" style="background-color: rgb(255, 0, 0); height: 0px;">
                                            <div class="chart-value"><span></span></div>
                                            <div class="chart-icon">
                                                <i class="ch_icon_o fa fa-music" data-action="0"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ch_title_area">
                                        <span class="ch_name_f" data-action="0">Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
                <div id="wizard">
                    <h1>Create Chart</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md">
                            
                            <div class="row xxxxx">
                                <div class="row col-lg-8 text-left">
                                    <div class="form-group col-lg-3">
                                        <label>Name *</label>
                                        <input name="name" type="text" class="form-control required ch_name" data-action="0">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Percent *</label>
                                        <input name="percent" type="text" class="form-control required ch_percent" data-action="0">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Color *</label>
                                        <input name="color" type="color" value="#ff0000" class="form-control required color-picker ch_color" data-action="0">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Icon *</label>
                                        <div>
                                            <input type="hidden" class="icon-class-input form-control required ch_icon" name="icon" value="fa fa-music"/>
                                            <button type="button" data-action="0" class="btn btn-primary picker-button">Choose an Icon</button>
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
                        </div>
                    </div>

                    <h1>Finish and Embed</h1>
                    <div class="step-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <textarea rows="2" cols="50" id="embed_code_area" placeholder="Press Embed Code and copy from here"></textarea>
                                <input type="button" value="Embed code" id="embed_code">
                            </div>
                            <div class="col-lg-6">
                                <!-- <button id="save" class="btn btn-sm btn-success pull-right m-t-n-xs" type="button"><strong>Save</strong></button> -->
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Download as <span class="fa fa-download"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="download_png">PNG</a></li>
                                        <li><a href="#" class="download_jpeg">JPEG</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
