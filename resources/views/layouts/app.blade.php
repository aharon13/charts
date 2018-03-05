<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/custom_styles.css') !!}" />
    <!-- <link rel="stylesheet" href="{!! asset('css/fontawesome-all.css') !!}" /> -->

    <link href="{!! asset('css/steps/jquery.steps.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('js/iconpicker/iconpicker.css') !!}" />
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/iconpicker/iconpicker.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/steps/jquery.steps.min.js') !!}"></script>


<script src="{!! asset('js/custom.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/jspdf.min.js') !!}" type="text/javascript"></script>

<script src="{!! asset('js/html2canvas.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/canvas2image.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/base64.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/canvas2image.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/FileSaver.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/canvas-toBlob.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
