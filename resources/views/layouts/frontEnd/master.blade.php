<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.frontEnd.head')
    @yield('css')
</head>
<body>
@yield('content')
@include('FrontEnd.modals.signInModal')
@include('layouts.frontEnd.footer')
@include('layouts.frontEnd.scripts')
@yield('script')
</body>
</html>

