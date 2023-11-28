<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome () {
        return view('welcome');
    }

    public function detail () {
        return view('detail');
    }
    public function contact() {
        return view('contacts');
    }
    public function indexArticles() {
        return view('articles');
    }
}
