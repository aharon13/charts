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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Create your chart
                    <hr>
                    <div>
                        {!! Form::open(['url' => '/create-multi-chart','id'=>'form']) !!}
                        <div class="panel">
                            <div class="row" id="myDivId">
                                <div class="col-lg-3"><b>Name</b><br><input type="text" name="name1" placeholder="Name"></div>
                                <div class="col-lg-3"><b>Percent</b><br><input type="text" name="percent1" placeholder="Percent"></div>
                                <div class="col-lg-3"><b>Color</b><br><input type="color" name="color1" placeholder="Color"></div>
                                <div class="col-lg-3"><b>Icon</b><br><input type="text" name="icon1" placeholder="Icon"></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10"><input type="submit" name="submit" value="Add Chart"></div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                        <input type="hidden" id="hiddenInput" value="1" name="number">
                        {!! Form::close() !!}

                    </div>

                    <div class="row">
                        <input type="button" value="add new row" onclick="divClone()">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function divClone() {
        var f = document.getElementById("form");
        var number = document.getElementById('hiddenInput').value;
        number++;
        document.getElementById('hiddenInput').value = number;
        var n = document.createElement("input"); //input element, text
        n.setAttribute('type',"text");
        n.setAttribute('name',"name"+ number );

        var p = document.createElement("input"); //input element, Submit button
        p.setAttribute('name','percent' +number );

        var c = document.createElement("input"); //input element, Submit button
        c.setAttribute('type','color');
        c.setAttribute('name','color'+number);

        var i = document.createElement("input"); //input element, Submit button
        i.setAttribute('name','icon'+number);

        var br = document.createElement('br');

        f.appendChild(n);
        f.appendChild(p);
        f.appendChild(c);
        f.appendChild(i);
        f.appendChild(br);


    }

</script>
@endsection
