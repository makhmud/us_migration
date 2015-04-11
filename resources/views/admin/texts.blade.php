
@extends('layouts.admin')

@section('content')

    <form class="form" action="/admin/texts" method="POST" enctype="multipart/form-data" >
        <div class="form-control"><input type="text" name="key"/></div>
        <div class="form-control"><input type="text" name="title"/></div>
        <div class="form-control"><select name="lang" id="">
                <option value="en">en</option>
                <option value="ru">ru</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="content" class="ckeditor" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group"><input type="submit" name="new" class="btn btn-success" value="Add"/></div>
    </form>

    {{--@foreach($texts as $text)--}}
        {{--<form class="form" action="/admin/comments" method="POST" enctype="multipart/form-data" >--}}
            {{--<input type="hidden" name="id" value="{{$text->id}}"/>--}}
            {{--<div>{{$text->key}}}</div>--}}
            {{--<div class="form-group">--}}
                {{--<textarea name="content" class="form-control" id="" cols="30" rows="10">{{$text->content}}}</textarea>--}}
            {{--</div>--}}
            {{--<div class="form-group"><input type="submit" name="save" class="btn btn-success" value="Save"/></div>--}}
        {{--</form>--}}
    {{--@endforeach--}}

@stop