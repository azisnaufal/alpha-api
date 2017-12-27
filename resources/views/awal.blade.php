<!DOCTYPE html>
<html lang="en">

  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Api</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modalLogin.css')}}" rel="stylesheet">

  </head>

  <body >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">API Bandung</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
             <li class="nav-item">
              <a class="nav-link active" href="{{url('')}}">Home</a>
            </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('nyobaan') }}">Endpoint</a>
             
           </li>
          @guest
           <li class="nav-item">
              <a href="#" class="nav-link " data-toggle="modal" data-target="#loginmodal">Login</a>
            </li>
          @endguest
          @auth
          <li class="nav-item">
              <a class="nav-link" href="{{ route('usermgmt') }}">Manage User</a>
            </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </li>
          @endauth
          
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
         <!--  <div class="intro-lead-in">Selamat datang!</div> -->
          <div class="intro-heading text-uppercase">Welcome to Portal API Bandung</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#keterangan" style="color: black !important">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- keterangan -->
    <section id="keterangan">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Apa itu Portal API Bandung?</h2>
            <h3 class="section-subheading text-muted">API Bandung merupakan sebuah layanan yang menyediakan informasi data yang ada di lingkup Pemerintah Kota Bandung. Data ini mencakup semua bidang yang ada di kota Bandung seperti Kesehatan, Kebersihan, Transportasi, dll. Dengan adanya API Bandung, maka para developer dapat mengembangkan aplikasi mobile atau website menggunakan API yang tersedia.API Bandung merupakan sebuah layanan yang menyediakan informasi data yang ada di lingkup Pemerintah Kota Bandung. Data ini mencakup semua bidang yang ada di kota Bandung seperti Kesehatan, Kebersihan, Transportasi, dll. Dengan adanya API Bandung</h3>
          </div>
        </div>
        
      </div>
    </section>

  
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="copyright">Copyright &copy; Portal API 2017</span>
          </div>
         
      </div>
    </footer>
    

          
        <!-- Modal -->
        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content loginmodal-container">
              <div class="modal-header">
                <h1 class="modal-title " id="loginmodal">Login</h1>
                
              </div>
              <div class="modal-body">
                 <form method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="{{ $errors->has('username') ? ' has-error' : '' }}">
                    
                            <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        {{ $errors->first('username') }}
                                    </span>
                                @endif
                            
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                          
                            <input type="password" required name="password" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            
                        </div>
                            <input type="submit" name="login" class="btn btn-primary btn-xl login loginmodal-submit" value="Login">

                </form>
                </div>
              
             
            </div>
          </div>
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js ') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js') }}"></script>



  </body>

</html>
