<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        
        @stack('prepend-style')
        @include('includes.style')
        @yield('style')
        @stack('addon-style')
        @livewireStyles
    </head>
    <body>
        <x-jet-banner />
        @if(Request::is('checkout/*'))
            @include('includes.navbar-alternate')
        @else
            @include('includes.navbar')
        @endif
        
        @if(Request::is('user/*'))
            {{ $slot }}
        @else
            @yield('content')
        @endif
        
        @include('includes.footer')

        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

        @stack('modals')
        @livewireScripts
    </body>
</html>
