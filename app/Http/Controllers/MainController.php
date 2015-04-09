<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;

class MainController extends Controller {

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