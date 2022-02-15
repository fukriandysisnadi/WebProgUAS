<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function loginView(){
        if(!Auth::check()){
            return view ('login');
        }
        return redirect()->back();
    }

    public function signupView(){
        if(!Auth::check()){
            return view ('signup');
        }
        return redirect()->back();
    }

    public function signup(Request $req){

        $rules= [
            'firstname' => ['required', 'alpha_num', 'max:25'],
            'middlename' => ['max:25'],
            'lastname' => ['required', 'alpha_num', 'max:25'],
            'gender' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'role' => ['required'],
            'password' => ['required', 'alpha_num', 'min:8']
        ];

        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $newAccount = new User();
        $newAccount->first_name = $req->firstname;
        if($req->middle_name != null){
            $newAccount->middlename = $req->middlename;
        }
        $newAccount->last_name = $req->lastname;
        $newAccount->email = $req->email;
        $newAccount->gender_id = $req->gender;
        $newAccount->password = bcrypt($req->password);
        $newAccount->role_id = $req->role;
        $newAccount->display_picture_link = $req->displaypicture;

        $newAccount->save();
        Auth::attempt($credentials, true);
        return redirect("/")->with('success', "Register success! Welcome!");
    }

    public function login(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if(Auth::attempt($credentials)){
            return redirect("/");
        }else{
            return redirect('login');
        }
    }

    public function profile(){
        $user = Auth::User();

        return view('profile', ['user' => $user]);
    }

    public function updateprofile(Request $req){

        $rules= [
            'firstname' => ['required', 'alpha_num', 'max:25'],
            'middlename' => ['max:25'],
            'lastname' => ['required', 'alpha_num', 'max:25'],
            'gender' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'role' => ['required'],
            'password' => ['required', 'alpha_num', 'min:8']
        ];

        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];
        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $newAccount = DB::table('users')->where('id', Auth::id())->update([
            'first_name' => $req->firstname,
            'middle_name' => $req->middlename,
            'last_name' => $req->lastname,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'display_picture_link' => $req->displaypicture,
            'role_id' => $req->role,
            'gender_id' => $req->gender
        ]);
        Auth::attempt($credentials, true);
        return redirect("/");  
    }
}