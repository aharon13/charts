@extends('layouts.app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>E-commerce grid</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>E-commerce</a>
            </li>
            <li class="active">
                <strong>Products grid</strong>
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

                    <div class="product-imitation" style="padding: 21.5px 0;">
                       <img class="singleChartImg" src="../css/patterns/t1.png">
                    </div>
                    <div class="product-desc">
                        <small class="text-muted">Single Thing Chart</small>
                        <a href="#" class="product-name"> Product</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="/createSingleChart" class="btn btn-xs btn-outline btn-primary">Create<i class="fas fa-pencil-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation" style="padding: 21.5px 0;">
                        <img class="singleChartImg" src="../css/patterns/t2.png" style="width: 185px">
                    </div>
                    <div class="product-desc">
                        <small class="text-muted">Category</small>
                        <a href="#" class="product-name"> Product</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">
                            <a href="createMultiChart" class="btn btn-xs btn-outline btn-primary">Create<i class="fas fa-pencil-alt"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation" style="padding: 142.5px 0;">
                        <h2>More  Templates <p><strong>Coming Soon!</strong></p></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation" style="padding: 142.5px 0;">
                        <h2>More  Templates <p><strong>Coming Soon!</strong></p></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
