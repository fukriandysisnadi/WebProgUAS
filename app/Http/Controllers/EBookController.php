<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use Illuminate\Http\Request;

class EBookController extends Controller
{

    public function home(){
        $ebook = EBook::all()->where('id');
        
        return view ('home', ['ebook' => $ebook]);
    }

    public function index($id){
        $ebook = EBook::find($id);

        return view('ebookdetail', ['ebook' => $ebook]);
    }
}
