<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends BaseController {

    public function __construct(){

    }

    public function getIndex()
    {
        return view('admin.index', []);
    }

    public function getComments() {
        return view('admin.comments', ['comments' => Comment::all()]);
    }

    public function postComments() {

        $comment = Comment::find(Input::get('id'));

        if( Input::has('save') ){
            $file = Request::file('image');
            if(!is_null($file)) {
                $fname = Str::random(8) . $file->getClientOriginalName();
                $path = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'user' ;
                $file->move( $path, $fname );
                Image::make($path . DIRECTORY_SEPARATOR . $fname)->fit(169, 169)->save();
                $comment->image = $fname;
            }

            $comment->name = Input::get('name');
            $comment->content = Input::get('content');
            $comment->save();
        } elseif (Input::has('delete')) {
            $comment->delete();
        }

        return Redirect::back();
    }

    public function getTexts() {

    }

}