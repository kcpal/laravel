<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    {{--<link rel="stylesheet" href="css/style.css">--}}
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/justified-nav.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::script('js/jquery-1.11.3.min.js')!!}
    {!!Html::script('js/jquery.validate.js')!!}
    {!!Html::script('js/bootstrap.js')!!}
    {{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}
</head>
<body>

<div class="container">
    <div class="masthead">
        <div class="header-content clearfix">
            <a href="/" class="logo"><img src="{{ URL::asset('images/Song.png') }}" class="logo-image" alt="Logo"></a>
            <h3 class="text-muted">Songs Fan Club</h3>
        </div>
        <nav>
            <ul class="nav nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Add New</a></li>
                <li><a href="#">Edit</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')


    @yield('footer')
</div>
</body>
</html>
