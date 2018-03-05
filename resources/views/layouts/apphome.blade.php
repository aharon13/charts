<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>INSPINIA - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{!! asset('css/animate.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    
</head>
<body id="page-top">
    @include('layouts.topnavbarhome')

    @yield('content')

    <!-- Footer -->
    @include('layouts.footerhome')

<!-- <script src="{!! asset('js/custom.js') !!}" type="text/javascript"></script> -->
<script src="{!! asset('js/jquery-2.1.1.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/pace.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/classie.js') !!}"></script>
<script src="{!! asset('js/cbpAnimatedHeader.js') !!}"></script>
<script src="{!! asset('js/wow.min.js') !!}"></script>
<script src="{!! asset('js/inspinia.js') !!}"></script>

@section('scripts')
@show

</body>
</html>
