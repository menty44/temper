@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

<!--                <div class="panel-body">-->
<!--                    You are logged in!-->
<!--                </div>-->
                <div style="width: 750px; margin: 2em auto; padding: 1em; border: 1px solid red; border-radius: 0.5em">
                    Highcharts data load from a JSON using manual JSON Processing
                </div>
                <div id="container" style="height: 400px"></div>

            </div>
        </div>
    </div>
</div>
@endsection
