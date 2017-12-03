
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
     <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    
</head>
<style type="text/css">
  .container{
    
</style>
<body>
 
        
   <nav class="navbar navbar-expand-lg navbar-light bg-light nav-kustom">
    <a class="navbar-brand " href="#">Portal API</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <div class="ininavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active bg-light">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown bg-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item bg-light">
          <a class="nav-link" href="#">Link</a>
        </li>
        
      </ul>
  </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <span class="glyphicon glyphicon-search"></span>
        
      </form>
    </div>
  </nav>
    
        @yield('content')
    </div>

    <!-- Scripts -->
  
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script  src="{{ asset('bootstrap/js/jquery-3.2.1.min.js')}}"></script>
     <script  src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
<!--     
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
</body>
</html>
