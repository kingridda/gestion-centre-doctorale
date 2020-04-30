@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-content">
        <div class="col-2">
            <div><a href="/show">voir mon profile</a></div>            
            <div><a href="/profile/encm">envoyer message au encadrant</a></div>
            <div><a href="/profile/encm/show">voir mes messages</a></div>
            <div><a href="/profile/compte_rendu">envoyer compte rendu</a></div>
            <div><a href="/profile/compte_rendu/show">voir mes compte rendu</a></div>
            <div><a href="/forum"> aller au forum</a></div>
            <div><a href="/profile/soutenance"> demmande de soutenance</a></div>
        </div>
        <div class="col-8">
            <div class="title">post title</div>
            <p> description</p>
            <div>
            <img src="im.png" style="width: 600px;" /></div>
            <div class="telecharger"> <a href="#">telecharger attachment</a></div>
           
        </div>
        
    </div>
</div>
@endsection
