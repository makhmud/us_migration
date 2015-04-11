<html>
<head>
    <title>US immigration @yield('title')</title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="/css/normalize.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/lightbox.css"/>
    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="/admin">Home</a></li>
        <li role="presentation"><a href="/admin/texts">Texts</a></li>
        <li role="presentation"><a href="/admin/comments">Comments</a></li>
    </ul>
    @yield('content')
</div>

</body>
</html>