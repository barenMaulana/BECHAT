<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.style')
    <livewire:styles>
</head>
<body>
    @include('includes.navbar-comment')
        @yield('content')
    @include('includes.script')
<livewire:scripts>
</body>
</html>