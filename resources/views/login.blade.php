@extends('layoutauth')

@section('content')

    <div class="m-3">
        <div>
            <div class="container-sm">
                <h3 class="text-decoration-underline">Log In</h3>
                <form enctype="multipart/form-data" method="POST" action="/login">
                @csrf
                <div class="row">
                    <div class="col-6 mb-5">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">EmailAddress:</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control form-control-sm" id="email" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label col-form-label-sm">Password:</label>
                            <div class="col-sm-7">
                              <input type="password" class="form-control form-control-sm" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    @if ($errors->first())
                        <p style="color: red">{{$errors->first()}}</p>
                    @endif
                </div>  
                <div class="row">
                    <div class="col-4">
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button class="btn btn-warning" type="submit" value="SINGUP" style="width: 100%">Submit</button>
                        </div> 
                        <div>
                            <a class="text-center" href="/signup"><p>Don't have an account? click here to sign up</p></a> 
                        </div> 
                    </div> 
                </div> 
                </form>  
            </div>
        </div>
    </div>
@endsection