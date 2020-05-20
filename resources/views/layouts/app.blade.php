<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.header')

    @if(Request::is('/'))
        @include('inc.hero')
    @endif

    <div class="container">
        <div class="row">
            <div class="col-9">
                @yield('content')
            </div>

            <div class="col-3">
                @include('inc.messages')
                @include('inc.aside')
            </div>
        </div>

        @include('inc.footer')
    </div>
</body>
</html>