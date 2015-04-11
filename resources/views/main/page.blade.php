@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="inner">
            <h1>{{$page->title}}</h1>
            {!!$page->content!!}
        </div>
    </div>

@stop