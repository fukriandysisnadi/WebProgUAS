<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $ebook = EBook::all();

        return view ('index', ['ebook' => $ebook]);
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

    public function updateprofile(){
        $ebook = EBook::all();

        return view ('updateprofile', ['ebook' => $ebook]);
    }
}
