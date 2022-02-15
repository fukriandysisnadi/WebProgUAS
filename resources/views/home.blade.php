@extends('layout')

@section('content')

    @if(Auth::User())
        <div class="container mr-2 mt-3">
            <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8 m-4">
                <div class="justify-content-center m-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Author</th>
                                <th scope="col">Tittle</th>
                            </tr>
                        </thead>
                        <table class="table table-bordered border-dark">
                                @foreach ($ebook as $d)
                                <tr>
                                    <td scope="row">{{ $d->author }}</td>
                                    <td><a href="/ebookdetail/{{$d->id}}">{{ $d->tittle }}</a></td>
                                </tr>
                                @endforeach
                        </table>
                    </table>
                </div>

            </div>
            <div class="col-2">
            </div>
        </div>
    @else
    <div class="card-body">
        <h3 class="card-title p-5 m-5">
            Find and Rent your E-Book Here!
        </h3>
    </div>
    @endif

@endsection