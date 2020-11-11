<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://laravel.com/img/logomark.min.svg" type="image/x-icon">
    <title>@yield('title')</title>
    @include('includes.style')
    <livewire:styles>
</head>
<body>
    @include('includes.user.navbar')
    
    @yield('content')

    @include('includes.script')

    @include('includes.footer')
    <livewire:scripts>
</body>
</html>