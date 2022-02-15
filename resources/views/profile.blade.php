@extends('layout')

@section('content')
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-1">
            </div>
            <div class="col-2">
                <img src="ayam.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-4">
                <form enctype="multipart/form-data" method="POST" action="/updateprofile">
                @csrf
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-2 col-form-label col-form-label-sm">FirstName:</label>
                        <div class="col-sm-8">
                        <input type="" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="{{ $user -> first_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-2 col-form-label col-form-label-sm">LastName:</label>
                        <div class="col-sm-8">
                        <input type="" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="{{ $user -> last_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender" class="col-sm-2 col-form-label col-form-label-sm">Gender:</label>
                        <div class="col-sm-8">
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
                        <div class="col-sm-8">
                        <input type="password" class="form-control form-control-sm" id="password" name="password" >
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row mb-3">
                        <label for="middlename" class="col-sm-3 col-form-label col-form-label-sm">MiddleName:</label>
                        <div class="col-sm-8">
                        <input type="" class="form-control form-control-sm" id="middlename" name="middlename" placeholder="{{ $user -> middle_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label col-form-label-sm">EmailAddress:</label>
                        <div class="col-sm-8">
                        <input type="" class="form-control form-control-sm" id="email" name="email" placeholder="{{ $user -> email }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="role" class="col-sm-3 col-form-label col-form-label-sm">Role:</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" name="role" id="role">
                                <option selected></option>
                                <option value="1">User</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="displaypicture" class="col-sm-3 col-form-label col-form-label-sm">DisplayPicture:</label>
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <input class="form-control form-control-sm" id="displaypicture" type="file" name="displaypicture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                </div>

                <div class="d-grid gap-2 col-2 mx-auto pt-5">
                    <button type="submit" class="btn btn-warning" value="UPDATE">Save</button>
                </div>
                </form>
        </div>
    </div>
@endsection