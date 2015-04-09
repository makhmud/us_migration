
@extends('layouts.admin')

@section('content')

@foreach($comments as $comment)
    <form class="form" action="/admin/comments" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="{{$comment->id}}"/>
        <div class="form-group"><input type="file" name="image"/></div>
        <div class="form-group"><input class="form-control" required="required" name="name" type="text" value="{{$comment->name}}"/></div>
        <div class="form-group">
            <textarea name="content" required="required" id="" cols="30" rows="10" class="form-control">{{$comment->content}}</textarea>
        </div>
        <div class="form-group"><input type="submit" name="save" class="btn btn-success" value="Save"/><input type="submit" name="delete" class="btn btn-danger" value="Delete"/></div>
    </form>
@endforeach

@stop