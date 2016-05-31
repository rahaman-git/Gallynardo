<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallynardo</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
    <script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
    </script>
</head>
<body>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
        @if(Session::has('flash_error'))
            <div class="alert alert-danger">{{ Session::get('flash_error') }}</div>
        @endif

        @yield('content')
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<script type="text/javascript" src="{{ asset('js/vendor/vendor.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/vendor/lightbox.min.js') }}" ></script>
<script type="text/javascript" src="{{ url(elixir('js/all.js')) }}" ></script>
</body>
</html>