<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>INSPINIA - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! Html::style('public/home_landing/css/bootstrap.min.css') !!}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{!! Html::style('public/home_landing/css/animate.min.css') !!}">

    <link rel="stylesheet" href="{!! Html::style('public/home_landing/font-awesome/css/font-awesome.min.css') !!}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{!! Html::style('public/home_landing/css/style.css') !!}">
    
</head>
<body id="page-top">
    @include('layouts.topnavbarhome')

    @yield('content')

    <!-- Footer -->
    @include('layouts.footerhome')

<!-- <script src="{!! asset('js/custom.js') !!}" type="text/javascript"></script> -->
<script src="{!! Html::script('public/home_landing/js/jquery-2.1.1.js') !!}" type="text/javascript"></script>
<script src="{!! Html::script('public/home_landing/js/pace.min.js') !!}"></script>
<script src="{!! Html::script('public/home_landing/js/bootstrap.min.js') !!}"></script>
<script src="{!! Html::script('public/home_landing/js/classie.js') !!}"></script>
<script src="{!! Html::script('public/home_landing/js/cbpAnimatedHeader.js') !!}"></script>
<script src="{!! Html::script('public/home_landing/js/wow.min.js') !!}"></script>
<script src="{!! Html::script('public/home_landing/js/inspinia.js') !!}"></script>

@section('scripts')
@show

</body>
</html>
