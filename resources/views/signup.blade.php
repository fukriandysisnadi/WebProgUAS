@extends('layoutauth')

@section('content')

    <div class="m-3">
        <div>
            <div class="container-sm">
                <h3 class="text-decoration-underline">Sign Up</h3>
                <form enctype="multipart/form-data" method="POST" action="/signup">
                @csrf
                <div class="row">
                    <div class="col-6 mb-5">
                        <div class="row mb-3">
                            <label for="firstname" class="col-sm-2 col-form-label col-form-label-sm">First Name:</label>
                            <div class="col-sm-10">
                              <input type="" class="form-control form-control-sm" id="firstname" name="firstname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lastname" class="col-sm-2 col-form-label col-form-label-sm">Last Name:</label>
                            <div class="col-sm-10">
                              <input type="" class="form-control form-control-sm" id="lastname" name="lastname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label col-form-label-sm">Gender:</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
                                    <label class="form-check-label" for="gender" value="1">
                                      Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender"  value="2">
                                    <label class="form-check-label" for="gender" value="2">
                                      Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label col-form-label-sm">Password:</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control form-control-sm" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-5">
                        <div class="row mb-3">
                            <label for="middlename" class="col-sm-2 col-form-label col-form-label-sm">MiddleName:</label>
                            <div class="col-sm-10">
                              <input type="" class="form-control form-control-sm" id="middlename" name="middlename">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">EmailAddress:</label>
                            <div class="col-sm-10">
                              <input type="" class="form-control form-control-sm" id="email" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-sm-2 col-form-label col-form-label-sm">Role:</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="role" id="role">
                                    <option selected></option>
                                    <option value="1">User</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="displaypicture" class="col-sm-2 col-form-label col-form-label-sm">DisplayPicture:</label>
                            <div class="col-sm-10">
                                <div class="mb-3">
                                    <input class="form-control form-control-sm" id="displaypicture" type="file" name="displaypicture">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    @if ($errors->first())
                        <p style="color: red">{{$errors->first()}}</p>
                    @endif
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button class="btn btn-warning" type="submit" value="SINGUP" style="width: 100%">Sign Up</button>
                    </div> 
                    <div>
                        <a class="text-center" href="/login"><p>Already have an account? click here to login</p></a> 
                    </div>  
                </form>     
            </div>
        </div>
    </div>
@endsection