<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Text;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class MainController extends Controller {

    public function __construct(){
        Cache::flush();
        View::share('comments', Comment::all());
        View::share('footer', Text::where('key', '=', 'footer')->first()->content);
        View::share('email', strip_tags(Text::where('key', '=', 'email')->first()->content));
        View::share('skype', strip_tags(Text::where('key', '=', 'skype')->first()->content));
        View::share('links', [
            'fb' => strip_tags(Text::where('key', '=', 'fb')->first()->content),
            'vk' => strip_tags(Text::where('key', '=', 'vk')->first()->content),
            'twitter' => strip_tags(Text::where('key', '=', 'twitter')->first()->content),
        ]);
    }

    public function getIndex()
    {

        return view('main.index', [
            'part1' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about1')->first(),
            'part2' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about2')->first(),
            'part3' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'about3')->first()
        ]);
    }

    public function getVisas() {
        return view('main.page', ['page' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'visas')->first(),]);
    }

    public function getImmigration() {
        return view('main.page', ['page' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'immigration')->first(),]);
    }

    public function getContacts() {
        return view('main.page', ['page' => Text::where('lang', '=', \App::getLocale())->where('key', '=', 'contacts')->first(),]);
    }

}