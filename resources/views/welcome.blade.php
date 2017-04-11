@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Some Content</h1>
            <p>{{ 2 == 3 ? "Hello": "Dont equal" }}</p>
        </div>
    </div>

@endsection