
@extends('layouts.admin')

@section('content')

    {{--<form class="form" action="/admin/texts" method="POST" enctype="multipart/form-data" >--}}
        {{--<div class="form-group"><input class="form-control" type="text" name="key"/></div>--}}
        {{--<div class="form-group"><input class="form-control" type="text" name="title"/></div>--}}
        {{--<div class="form-group"><select class="form-control" name="lang" id="">--}}
                {{--<option value="en">en</option>--}}
                {{--<option value="ru">ru</option>--}}
            {{--</select>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<textarea name="content" class="ckeditor" class="form-control" id="" cols="30" rows="10"></textarea>--}}
        {{--</div>--}}
        {{--<div class="form-group"><input type="submit" name="new" class="btn btn-success" value="Add"/></div>--}}
    {{--</form>--}}

    @foreach($texts as $key => $text)
        <h2>{{$key}}</h2>
        <div class="row">
            @if (isset($text['ru']))
                <form class="form col-md-6" action="/admin/texts" method="POST" enctype="multipart/form-data" >
                    <div>RU</div>
                    <input type="hidden" name="id" value="{{$text['ru']['id']}}"/>
                    <div class="form-group"><input class="form-control" type="text" name="title" value="{{$text['ru']['title']}}"/></div>
                    <div class="form-group">
                        <textarea name="content" class="ckeditor" id="" cols="30" rows="10">{{$text['ru']['content']}}</textarea>
                    </div>
                    <div class="form-group"><input type="submit" name="save" class="btn btn-success" value="Save"/></div>
                </form>
            @endif
            @if (isset($text['en']))
            <form class="form col-md-6" action="/admin/texts" method="POST" enctype="multipart/form-data" >
                <div>EN</div>
                <input type="hidden" name="id" value="{{$text['en']['id']}}"/>
                <div class="form-group"><input class="form-control" type="text" name="title" value="{{$text['en']['title']}}"/></div>
                <div class="form-group">
                    <textarea name="content" class="ckeditor" id="" cols="30" rows="10">{{$text['en']['content']}}</textarea>
                </div>
                <div class="form-group"><input type="submit" name="save" class="btn btn-success" value="Save"/></div>
            </form>
            @endif
        </div>

    @endforeach

@stop