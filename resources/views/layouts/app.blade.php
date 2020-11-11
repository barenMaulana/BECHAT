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
@include('includes.navbar')

    @yield('content')

@include('includes.footer')

@include('includes.script')
<livewire:scripts>
</body>
</html>