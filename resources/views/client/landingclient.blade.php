<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page Client</title>
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-social.min.css') }}">

    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css') }}">

</head>
<body>

    {{-- <div class="page">
        @include('partials.clientheader')
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div> --}}

    <div class="page bg-light">
        @include('partials.clientheader')
        <div class="container">
            @yield('content')
        </div>
        

    


    <script src="{{ asset('js/demo.min.js') }}"></script>
    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo-theme.min.js') }}"></script>
    <script src="{{ asset('js/tabler.esm.min.js') }}"></script>
</body>
</html>

