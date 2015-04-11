<html>
<head>
    <title>US immigration @yield('title')</title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="/css/normalize.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/lightbox.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<header class="container">
    <div class="inner">
        <div id="top">
            <div id="lang">
                <span>{{trans('texts.lang')}}</span>
                <span class="switch
                    @if (\App::getLocale() == 'en')
                        eng
                    @else
                        rus
                    @endif
                "><a href="/ru">рус</a><a href="/en">eng</a></span>
            </div>
            <div id="contacts">
                <div class="mail">{{$email}}</div>
                <br/>
                <div class="skype">{{$skype}}</div>
            </div>
        </div>
        <div id="logo"><img src="/images/logo.png" alt=""/></div>
    </div>
</header>
<nav>
    <ul id="main-menu" class="active-{{\Request::segment(2)}}">
        <li><a href="/{{\App::getLocale()}}">{{trans('menu.about')}}</a></li>
        <li><a href="/{{\App::getLocale()}}/visas">{{trans('menu.visas')}}</a></li>
        <li><a href="/{{\App::getLocale()}}/immigration">{{trans('menu.immigration')}}</a></li>
        <li><a href="/{{\App::getLocale()}}/contacts">{{trans('menu.contacts')}}</a></li>
    </ul>
</nav>
    @yield('content')
@include('main.replies')
<footer class="container">
    <div class="inner">
        <p class="pull-left">© 2015 - us-immigration.ua <br/>
            Перепечатывание и использование материалов в электронном <br/> формате разрешается
            только при наличии гиперссылки на <br/> us-immigration.ua(пример)</p>

        <div class="socials pull-right">
            <a class="social-tw" href="{{$links['twitter']}}"></a>
            <a class="social-vk" href="{{$links['vk']}}"></a>
            <a class="social-fb" href="{{$links['fb']}}"></a></div>
    </div>
</footer>
</body>
</html>