@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-md-none d-block ">
            <select id="sub-menu" name="sub-menu">
                <option>aller a...</option>
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
                            <li><a href="/show">Profile</a></li>            
                            <li><a href="/profile/encm">Envoyer des messages</a></li>
                            <li><a href="/profile/encm/show">Boite des messages</a></li>
                            <li><a href="/profile/compte_rendu">Envoyer un compte rendu</a></li>
                            <li><a href="/profile/compte_rendu/show">Mes comptes rendu</a></li>
                            <li><a href="/forum">Forum</a></li>
                            <li><a href="/profile/soutenance"> Demmande de soutenance</a></li>
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
           
        </div>
        
    </div>
</div>
@endsection

