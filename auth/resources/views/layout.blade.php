<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    @livewireStyles
 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    <title>{{ config('app.name') }}</title>
</head>
<body>
@livewire('navigation-dropdown')
 
    {{-- Here comes your content! --}}

@yield('content')
 
@livewireScripts
</body>
</html>