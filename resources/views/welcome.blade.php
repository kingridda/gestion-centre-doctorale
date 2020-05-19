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
                height: 7rem;            
                margin: 0px auto;
                background-color: #8d8d8d;
                color: #ffffff;
                    
                
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
                <div class="row ">
                	<div class="col-lg-4 ">
                    <img src="img/logiciel.png" style="border-radius:100%" width="15%" >
                        
                            <h3>Génie logiciel</h3> 
                      <p> Le génie logiciel ou l'ingénierie logicielle une science de génie industriel qui étudie les méthodes de travail et les bonnes pratiques des ingénieurs qui développent des logiciels. Le génie logiciel s'intéresse en particulier aux procédures systématiques qui permettent d'arriver à ce que des logiciels de grande taille correspondent aux attentes du client, soient fiables, aient un coût d'entretien réduit et de bonnes performances tout en respectant les délais et les coûts de construction</p>
                  </div>
                
                
                	<div class="col-lg-4 ">
                    <img src="img/info_decision.png" style="border-radius:100%" width="15%">
            
                    <h3>Informatique décisionnelle</h3>
                     <p> L’informatique décisionnelle est l'informatique à l'usage des décideurs et des dirigeants d'entreprises. Elle désigne les moyens, les outils et les méthodes qui permettent de collecter, consolider, modéliser et restituer les données, matérielles ou immatérielles, d'une entreprise en vue d'offrir une aide à la décision et de permettre à un décideur d’avoir une vue d’ensemble de l’activité traitée. </p>
                	 </div>
                
                
                	<div class="col-lg-4 ">
                    <img src="img/reseau.png" style="border-radius:100%" width="15%">
    
                    <h3>Réseaux et télécommunications</h3>
                     <br>
                      <p>La filière réseaux et Télécommunications avancées vise à former des ingénieurs avec une double compétence en réseaux et télécommunications couvrant le déploiement, le management, la maintenance et l’exploitation des réseaux de télécommunications actuels et de nouvelles générations ainsi que la mise en place de réseaux informatiques pour la gestion et l’interconnexion des réseaux de télécommunications. Les enseignements portent sur les systèmes de télécommunications fondements théoriques et applications ainsi que sur le déploiement et l’ingénierie des réseaux de télécommunications et réseaux informatiques.</p>
                      </div>
                
                <div class="row">
            
  					<div class="col-lg-4 ">
                     <img src="img/elec.png" style="border-radius:100%" width="15%" >
                
                    <h3>Génie électrique</h3> 
                    <br>
                    <p> Le génie électrique est une branche de la physique qui traite du domaine de l'électricité et de ses applications. Il regroupe les domaines du génie électrotechnique et du génie électronique. L'étude de domaine se réalise en physique, l'application se fait dans le domaine industriel</p>
                    </div>
                
                
                	<div class="col-lg-4 ">
                    <img src="img/genie_meca.png" style="border-radius:100%" width="15%">
            
                    <h3>Génie mécanique</h3>
                    <br>
                    <p> Le génie mécanique désigne l'ensemble des connaissances liées à la mécanique, au sens physique (sciences des mouvements) et au sens technique (étude des mécanismes). Ce champ de connaissances va de la conception d'un produit mécanique au recyclage de ce dernier en passant par la fabrication, la maintenance, etc. </p>
                    </div>
                
                
                	<div class="col-lg-4 ">
                    <img src="img/ener_env.png" style="border-radius:100%" width="15%">
    
                    <h3>Génie Energétique et Environnement</h3>
                    <br>   
                    <p> Le génie énergétique rassemble l'ensemble des aspects techniques et industriels de la production, du transport et de l'utilisation de l'énergie, quelle qu'en soit la forme. </p>
                	</div>
                 </div>
            
            </div>
        </div>

    <footer  class="footer" >
            <div class="content footer-margin">   
            <p>Cet humble travail est dédié à notre cher professeur Mahmoud Nassar.</p>
            <div class="">© 2020 Copyright
                    <a href="#"> GCD.com</a>
            </div>
        </div>
    </footer>
    </body>
</html>
