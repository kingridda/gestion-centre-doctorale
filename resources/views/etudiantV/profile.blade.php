@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-md-none d-block ">
            <select id="sub-menu" name="sub-menu">
                <option>aller à...</option>
                <option value="/show">Profile</option>
                <option value="/profile/encm">Envoyer des messages</option>
                <option value="/profile/encm/show">Boite des messages</option>
                <option value="/profile/compte_rendu">Envoyer un compte rendu</option>
                <option value="/profile/compte_rendu/show">Mes comptes rendu</option>
                <option value="/forum">Forum</option>
                <option value="/profile/soutenance"> Demmande de soutenance</option>
            </select>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-content">
        <aside class="sidebar col-lg-4 col-md-4 col-xs-12 mb-5">
            <div class="dynamicDiv" >
                <div class="sidebar-wrapper">
                    <nav>
                        <ul class="nolist d-none d-md-block ">
                            <li><a href="/show"><i class="fa fa-user-o"></i> Profile</a></li>            
                            <li><a href="/profile/encm"><i class="fa fa-comments-o"></i> Envoyer des messages</a></li>
                            <li><a href="/profile/encm/show"><i class="fa fa-envelope-o"></i> Boite des messages</a></li>
                            <li><a href="/profile/compte_rendu"><i class="fa fa-file-text"></i> Envoyer un compte rendu</a></li>
                            <li><a href="/profile/compte_rendu/show"><i class="fa fa-file-text-o"></i> Mes comptes rendu</a></li>
                            <li><a href="/forum"><i class="fa fa-users"></i> Forum</a></li>
                            <li><a href="/profile/soutenance"> <i class="fa fa-dot-circle-o"></i> Demmande de soutenance</a></li>
                        </ul>
                    </nav>
                </div><!-- .sidebar-wrapepr -->
            </div>
        </aside>
        <div class="col-8">
            <div class="title"><h1>Bienvenu à votre session</h1></div>
            @if($validation == 0)
                <div class="alert">
                    inscription n'est pas encore accepté
                </div>
                <div class="btn btn-danger">
                    <a href="/inscription">telecharger le reçu de préinscription</a>
                </div>
            @else
                Cedoc en votre service
            @endif

            <div class="mt-5 title"><h2><strong>AVIS IMPORTANT</strong></h2></div>
            <blockquote class="blockquote " style="word-spacing: 0.7rem; line-height: 200%; font-size: 1.75rem"> Le Centre d'Etudes Doctorales porte à la connaissance des étudiant(e)s admi(es) à la poursuivre des études de doctorat au titre de la nouvelle session 2021-2022 que le dernier delai d'inscription au Centre est fixe au jeudi 15 janvier 2021.
            <footer class="blockquote-footer "><cite>Le Directeur</cite></footer>
            </blockquote>
            <div>
            <div class="telecharger"> <a href="http://ensias.um5.ac.ma/sites/ensias.um5.ac.ma/files/Charte_the%C4%A2se.pdf?fbclid=IwAR3lfmMedYQrKGIL_rW-4A_vCEliDpHg1afIjot67Qf3MUTW5kT89Cjk_z0">Charte de la thèse de doctorat</a></div>

           
        </div>
        
    </div>
</div>
@endsection

