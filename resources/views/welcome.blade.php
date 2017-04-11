@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Control Structures</h1>
            @if(true)
                <p>this is only displays if it true</p>
            @else
                <p>this only display if is false</p>
            @endif

            <hr>
            @for($i = 0; $i< 5; $i++)
                <p>{{ $i + 1 }}. Iteration</p>
            @endfor
        </div>
    </div>

@endsection