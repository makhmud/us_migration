@extends('layouts.main')

@section('content')
    <div class="container">
<div class="inner">
    <article class="main-text">
        <div class="paragraph">
            <div class="show pull-left" >
                <img src="/images/front/1.jpg" alt=""/>
                <a rel="lightbox[gallery]" href="/images/front/1.jpg">{{trans('texts.view')}}</a>
            </div>
            <h1>{{$part1->title}}</h1>
          {!!$part1->content!!}
        </div>

        <div class="paragraph">
            <div class="show pull-right" >
                <img src="/images/front/2.jpg" alt=""/>
                <a rel="lightbox[gallery]" href="/images/front/2.jpg">{{trans('texts.view')}}</a>
            </div>
            {!!$part2->content!!}
        </div>

        <div class="paragraph">
            <div class="show pull-left" >
                <img src="/images/front/3.jpg" alt=""/>
                <a rel="lightbox[gallery]" href="/images/front/3.jpg">{{trans('texts.view')}}</a>
            </div>
            {!!$part3->content!!}
        </div>
    </article>
    </div>
    </div>


@stop