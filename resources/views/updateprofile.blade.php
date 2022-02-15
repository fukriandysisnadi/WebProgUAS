@extends('layout')

@section('content')
    <div class="m-5">
        <div class="rounded-circle"
        style="background-color: white;
        justify-content: center;
        width: 400px;
        height: 400px;
        display: flex;
        border: 10px solid #ffc107;
        align-items: center;
        margin: auto">
        <div style="color: black; font-size: 15px; text-align: center">
                <h3>Saved!</h3>
                <a href="/home" style="text-center">click here to  "Home"</a>
        </div>
        </div>
    </div>
@endsection