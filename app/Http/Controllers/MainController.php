<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\View;

class MainController extends Controller {

    public function __construct(){
        View::share('comments', Comment::all());
    }

    public function getIndex()
    {
        return view('main.index', []);
    }

    public function getVisas() {
        return view('main.noText', []);
    }

    public function getImmigration() {
        return view('main.noText', []);
    }

    public function getContacts() {
        return view('main.noText', []);
    }

}