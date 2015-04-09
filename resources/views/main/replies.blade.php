<article id="replies" class="container">
    <div class="inner">
        @foreach($comments as $comment)
            <div class="reply">
                <div class="image pull-left"><img src="/images/user/{{$comment->image}}" alt=""/></div>
                <div class="name">{{$comment->name}}</div>
                <div class="content">{{nl2br($comment->content)}}</div>
                <a href="#" class="more">{{trans('texts.read_more')}}</a>
            </div>
        @endforeach
        <br/>
        <a class="more-replies" href="#">{{trans('texts.more_replies')}}</a>
    </div>
</article>