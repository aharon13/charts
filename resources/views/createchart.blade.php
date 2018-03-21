@extends('layouts.app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>My Charts Gallery</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li class="active">
                <strong>Create Thing Chart</strong>
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
                    <a href="/createSingleChart">
                        <div class="product-imitation" style="padding: 21.5px 0;">
                        <img class="singleChartImg" src="../css/patterns/t1.png">
                        </div>
                        <div class="product-desc">
                            <small class="text-muted">Single Thing Chart</small>
                            <div class="small m-t-xs">
                                2 line description of chart
                            </div>
                            <div class="m-t text-righ">
                                <span class="btn btn-xs btn-outline btn-primary">Create<i class="fa fa-pencil"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">
                    <a href="createMultiChart">
                        <div class="product-imitation" style="padding: 21.5px 0;">
                            <img class="singleChartImg" src="../css/patterns/t2.png" style="width: 185px">
                        </div>
                        <div class="product-desc">
                            <small class="text-muted">Multiple Thing Chart</small>
                            <div class="small m-t-xs">
                                2 line description of chart
                            </div>
                            <div class="m-t text-righ">
                                <span class="btn btn-xs btn-outline btn-primary">Create<i class="fa fa-pencil"></i> </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation" style="padding: 123px 0;">
                        <h2>More  Templates <p><strong>Coming Soon!</strong></p></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation" style="padding: 123px 0;">
                        <h2>More  Templates <p><strong>Coming Soon!</strong></p></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
