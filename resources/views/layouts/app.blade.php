<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
      
    {{--  JS  --}}
    <script type="text/javascript" language="javascript" src="{{ asset('js/app.js') }}">
	</script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.min.js') }}">
	</script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}">
	</script>
    <script>
$(document).ready(function() {
    $('#tb_endpoints').DataTable();
} );
</script>
</head>
<body>
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
</body>
</html>
