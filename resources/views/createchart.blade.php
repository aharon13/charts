@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

                <div class="panel-body">
                    Create your chart
                    <hr>
                    <div class="container">
                        
                        <div class="row">
<h4>Select Template</h4>

<div class="row">
    <div class="col-md-5 col-lg-4 col-sm-6 col-xl-3">
        
        <div class="card">
            <div class="card-block text-center">
                <img class="singleChartImg" src="../css/patterns/t1.png">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-8">
                        <p style="font-size: 13px">Simlpe <b>Single Dimension</b> <br> Column Chart</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-4">
                        <a href="/createSingleChart" class="btn addTemplateBtn"><i aria-hidden="true" class="fa fa-plus"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-5 col-lg-4 col-sm-6 col-xl-3">
        
        <div class="card">
            <div class="card-block text-center">
                <img class="singleChartImg" src="../css/patterns/t2.png" style="width: 185px">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-9 col-8">
                        <p style="font-size: 13px">Simlpe <b>Multi Dimension</b> <br> Column Chart</p>
                    </div>
                    <div class="col-md-3 col-4">
                        <a href="/createMultiChart" class="btn   addTemplateBtn"><i aria-hidden="true" class="fa fa-plus"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





</div>
                    </div>
                </div>
    </div>
</div>
@endsection
