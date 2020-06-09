@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-md-none d-block ">
            <select id="sub-menu" name="sub-menu">
                <option>aller a...</option>
                <option value="/encadrant/show_profile">Profile</option>
                <option value="/encadrant/env_message">Envoyer un message</option>
                <option value="/encadrant/env_message/show">Boite des messages</option>
                <option value="/encadrant/compte_rendu">Comptes rendu</option>
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
                        	<li><a href="/encadrant/show_profile"><i class="fa fa-user-o"></i> Profile</a></li> 
                            <li><a href="/encadrant/env_message"><i class="fa fa-comments-o"></i> Envoyer un message</a></li>            
                            <li><a href="/encadrant/env_message/show"><i class="fa fa-envelope-o"></i> Boite des messages</a></li>
                            <li><a href="/encadrant/compte_rendu"><i class="fa fa-file-text-o"></i> Comptes rendu</a></li>
                        </ul>
                    </nav>
                </div><!-- .sidebar-wrapepr -->
            </div>
        </aside>
        <div class="col-8">
            <div class="title"><h1>Bienvenu à votre session</h1></div>
            <div class="row inform-cards" >
                        <div class="col-sm-5 col-10 p-4">
                            <div class="card text-white my-2 rounded">
                                <div class="card-body bg-primary d-flex align-items-center justify-content-between">
                                    <i class="fa fa-bell fa-lg"></i>
                                    <div class="inner-text text-right">
                                        <h3><span class="badge badge-danger badge-pill">1</span></h3>
                                        <h5>Nouveau message</h5>
                                    </div>
                                </div>
                                <div class="card-footer bg-dark">
                                    <a href="encadrant/env_message/show" class="btn btn-link text-danger">Voir ma boite de messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-10 p-4">
                            <div class="card text-white my-2 rounded">
                                <div class="card-body bg-primary d-flex align-items-center justify-content-between">
                                    <i class="fa fa-bell"></i>
                                    <div class="inner-text text-right">
                                        <h3><span class="badge badge-danger badge-pill">1</span></h3>
                                        <h5>Nouveau Compte rendu / rapport</h5>
                                    </div>
                                </div>
                                <div class="card-footer bg-dark">
                                    <a href="encadrant/compte_rendu" class="btn btn-link text-danger">Voir les comptes rendus / rapports</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
