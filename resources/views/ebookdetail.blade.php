@extends('layout')

@section('content')
    <div class="container-fluid justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10 pb-3 pt-5">
                    <h4 class="text-decoration-underline">E-Book Detail</h4>
                </div>
                <div class="col-2">
                </div>
                <div class="col-1 pb-4">
                    Tittle: 
                </div>
                <div class="col-5">
                    {{ $ebook ->tittle }}
                </div>
                <div class="col-4">
                </div>
                <div class="col-2">
                </div>
                <div class="col-1 pb-4">
                    Author:
                </div>
                <div class="col-5">
                    {{ $ebook ->author }}
                </div>
                <div class="col-4">
                </div>
                <div class="col-2">
                </div>
                <div class="col-1 pb-4">
                    Description:
                </div>
                <div class="col-5">
                    {{ $ebook ->description }}
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </div>
@endsection