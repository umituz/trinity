<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('title') }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @include('trinity::auth.layouts.style')
    @stack('styles')
</head>
<body class="flex justify-center items-center h-screen bg-gradient-to-r from-blue-100 to-blue-300">
<div class="flex h-full w-full">
    @include('trinity::auth.layouts.logo')
    <div class="flex justify-center items-center w-full md:w-1/2 h-full p-4">
        @yield('form')
    </div>
</div>
@include('trinity::auth.layouts.script')
@stack('scripts')
</body>
</html>