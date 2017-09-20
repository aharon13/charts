@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Create your chart
                    <hr>
                    <div class="container">
                        <row>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color:white">
                                <a href="/createSingleChart" type="button"><button>Add Single Chart</button></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <a href="/createMultiChart" type="button"><button>Add Multi Chart</button></a>
                            </div>
                        </row>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
