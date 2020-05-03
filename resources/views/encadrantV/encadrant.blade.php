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
                        	<li><a href="/encadrant/show_profile">Profile</a></li> 
                            <li><a href="/encadrant/env_message">Envoyer un message</a></li>            
                            <li><a href="/encadrant/env_message/show">Boite des messages</a></li>
                            <li><a href="/encadrant/compte_rendu">Comptes rendu</a></li>
                        </ul>
                    </nav>
                </div><!-- .sidebar-wrapepr -->
            </div>
        </aside>
        <div class="col-8">
            <div class="title"><h1>Bienvenu à votre session</h1></div>
            <p> description</p>
            <div>
            <img src="im.png" style="width: 600px;" /></div>
            <div class="telecharger"> <a href="#">telecharger attachment</a></div>
           
        </div>
        
    </div>
</div>

@endsection
