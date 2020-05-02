<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
            .footer{
                position: relative;
                bottom: 0;
                height: 10rem;            
                margin: 0px auto;
                background-color: #D1C4E9;
                    
                
            }

            .footer-margin{
                margin: 0px 150px 10px 150px;
                padding-top: 20px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .container{
                margin: 150px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .bgimage {
                background-image: url("img/background.jpg");
                background-position: center center;
                background-size: cover;
                height:300px;}
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bgimage">
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

            <div class="content container">
                <div class="title m-b-md center">
                    Nos filiere
                </div>
                <div class="row row-content">
                	<div class="col-sm-4 col-12 ">
                    <img src="img/logiciel.png" style="border-radius:100%" width="15%" >
                        
                            <h3>Génie logiciel</h3> 
                      <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                  </div>
                </div>
                <div class="row row-content">
                	<div class="col-sm-4 col-12 ">
                    <img src="img/info_decision.png" style="border-radius:100%" width="15%">
            
                    <h3>Informatique décisionnelle</h3>
                     <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                	 </div>
                </div>
                <div class="row row-content">
                	<div class="col-sm-4 col-12 ">
                    <img src="img/reseau.png" style="border-radius:100%" width="15%">
    
                    <h3>Réseaux et télécommunications</h3>
                     <br>
                      <p> nssar maxi rajl et merci....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                      </div>
                </div>
                <div class="row row-content">
            
  					<div class="col-sm-4 col-12 ">
                     <img src="img/elec.png" style="border-radius:100%" width="15%" >
                
                    <h3>Génie électrique</h3> 
                    <br>
                    <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                    </div>
                </div>
                <div class="row row-content">
                	<div class="col-sm-4 col-12 ">
                    <img src="img/genie_meca.png" style="border-radius:100%" width="15%">
            
                    <h3>Génie mécanique</h3>
                    <br>
                    <p> je suis tres fiere de se travail ....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa     aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                    </div>
                </div>
                <div class="row row-content">
                	<div class="col-sm-4 col-12 ">
                    <img src="img/ener_env.png" style="border-radius:100%" width="15%">
    
                    <h3>Génie Energétique et Environnement</h3>
                    <br>   
                    <p> nssar maxi rajl et merci....asdfghjhg fdsa  aaaaa aaaaaaa aa aaaaaa aaaa aaa  aaaaa a aaa aaaa aa aaaa a aaaaa  aaaaaa aa aaaaaa aaa a aaaaa aaa aaaaaa aa aaaaaa aa aa aaaa a aaaaaaa a aa aaaa aa aa aaaa aa aaaa aa aaa aa aa aaaaa aaa aaaa aaa aaaaaaa a a aaaaaaa aa aaaa aaa</p>
                	</div>
                 </div>
            
            </div>

    <footer  class="footer" >
            <div class="content footer-margin">   
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem
              aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.
              .</p>
            <div class="">© 2020 Copyright
                    <a href="#"> GCD.com</a>
            </div>
        </div>
    </footer>
    </body>
</html>
