<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GCD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS Bootstarp -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <header class="bgimage">
            <div class="flex-center position-ref full-height">
            
        <!login et inscription >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/profile') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="/salarie">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </header>
            
        <!-- Styles -->
        <style>
        html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;

                background: url('/img/background1.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /*align-items: center;*/
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-top: 50px;
                font-family: cursive;
                font-size: 120px;
            }
            .bgimage {
                background-image: url("img/background.jpg");
                background-position: center center;
                background-size: cover;
                height:300px;
            }
            .footer {
                  position: relative;
                  bottom: 0;
                  width: 100%;
                  height: 10rem;            /* Footer height */
                }            
        </style>
    </head>
    <body>
        <div class="container">
           <center> <h1>Nos filiere</h1></center>
          <div class="row">
            <div class="col-lg-4 mt-5 ">
                <center>
                <img src="img/logiciel.png" style="border-radius:100%" width="300px" >
                
                    <h3>Génie logiciel</h3> 
                <br>
              <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>
            </div>
            <div class="col-lg-4 mt-5">
                <center>
                <img src="img/info_decision.png" style="border-radius:100%" width="300px">
            
                    <h3>Informatique décisionnelle</h3>
                <br>
              <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>
            </div>
            <div class="col-lg-4 mt-5">
                <center>
                <img src="img/reseau.png" style="border-radius:100%" width="300px">
    
                    <h3>Réseaux et télécommunications</h3>
                <br>
              <p> nssar maxi rajl et merci....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>   
            </div>
          </div>
            
            <div class="row">
            <div class="col-lg-4 mt-5 ">
                <center>
                <img src="img/elec.png" style="border-radius:100%" width="300px" >
                
                    <h3>Génie électrique</h3> 
                <br>
              <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>
            </div>
            <div class="col-lg-4 mt-5">
                <center>
                <img src="img/genie_meca.png" style="border-radius:100%" width="300px">
            
                    <h3>Génie mécanique</h3>
                <br>
              <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>
            </div>
            <div class="col-lg-4 mt-5">
                <center>
                <img src="img/ener_env.png" style="border-radius:100%" width="300px">
    
                    <h3>Génie Energétique et Environnement</h3>
                <br>   
              <p> nssar maxi rajl et merci....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
            </center>   
            </div>
          </div>
        </div>
        </div>
        <br> <br> 
    </body>
        <!-- Footer -->
    <footer class="page-footer font-small bg-dark text-white footer" >
    
      <!-- Footer Links -->
      <div class="container">

          <!-- Grid column -->
          <div class="col-md-12 mt-0 py-3 text-center">
            <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem
              aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.
              .</p>
          </div>
          <!-- Grid column -->

        </div>

      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://google.com/"> GCD.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    </html>

