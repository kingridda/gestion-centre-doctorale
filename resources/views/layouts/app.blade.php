<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: url('/img/background1.jpg') no-repeat center center fixed;

            }
        .footer{
                position: relative;
                bottom: 0;
                height: 10rem;            
                margin: 0px auto;
                background-color: #D1C4E9;
                    
                
            }

            .footer-margin{
                text-align: center;
                margin: 0px 150px 10px 150px;
                padding-top: 20px;
            }
            
    </style>
=======
>>>>>>> abd4c83d8531ac1a36401f7c01bc21749241a75e
</head>
<body>
    <div id="app" class ="app_body" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
<<<<<<< HEAD
=======

                <ul class="navbar-nav">               <!-- Navbar tabs-->
                  <li class="nav-item" role="tablist">
                    <a class="nav-link" href="/show"  >Profile</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Envoyer</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/profile/encm">Encadrant</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/profile/compte_rendu">Compte Rendu</a>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/profile/encm/show">Messages</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/forum">Forum</a>
                  </li>

                </ul>

>>>>>>> abd4c83d8531ac1a36401f7c01bc21749241a75e
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/salarie">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ "Bonjour " .Auth::user()->prenom ." ". Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
              
                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<<<<<<< HEAD
     <footer  class="footer" >
            <div class="footer-margin">   
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
=======
</body>




<!-- Footer -->
    <footer class="page-footer font-small bg-dark text-white footer" >
    
      <!-- Footer Links -->
      <div class="container">

          <!-- Grid column -->
          <div class="col-md-12 mt-0 py-3 text-center">
            <p style="line-height: 1rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
>>>>>>> abd4c83d8531ac1a36401f7c01bc21749241a75e
              accusantium doloremque laudantium, totam rem
              aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.
              .</p>
            <div class="">© 2020 Copyright
                    <a href="#"> GCD.com</a>
            </div>
        </div>
<<<<<<< HEAD
=======

      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-0">© 2020 Copyright:
        <a href="https://google.com"> GCD.com</a>
      </div>
      <!-- Copyright -->

>>>>>>> abd4c83d8531ac1a36401f7c01bc21749241a75e
    </footer>
</body>
</html>
