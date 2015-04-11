<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Text;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\View;

class MainController extends Controller {

    public function __construct(){
        View::share('comments', Comment::all());
        View::share('email', Text::where('key', '=', 'email')->get());
    }

    public function getIndex()
    {

        return view('main.index', [
            'part1' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about1')->get(),
            'part2' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about2')->get(),
            'part3' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about3')->get()
        ]);
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