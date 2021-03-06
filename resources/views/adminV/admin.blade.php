@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-md-none d-block ">
            <select id="sub-menu" name="sub-menu">
                <option>aller a...</option>
                <option value="admin/theses">Thèses en cours</option>
                <option value="admin/dir">List des directeurs des thèses</option>
                <option value="admin/doc">List des doctorants</option>
                <option value="admin/soutenances">Demandes de soutenance</option>
                <option value="admin/liaison">lier les theses au doctorants</option>
                <option value="admin/liaison/s">supprimer une liaisone thèse-doctorant</option>
                <option value="admin/validat">valider les nouvelles inscriptions</option>
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
                        	<li><a href="admin/theses">Thèses en cours</a></li> 
                            <li><a href="admin/dir">List des directeurs des thèses</a></li>            
                            <li><a href="admin/doc">List des doctorants</a></li>
                            <li><a href="admin/soutenances">Demandes de soutenance</a></li>
                            <li><a href="admin/liaison">lier les theses au doctorants</a></li>
                            <li><a href="admin/liaison/s">supprimer une liaisone thèse-doctorant</a></li>
                            <li><a href="admin/validat">valider les nouvelles inscriptions</a></li>
                        </ul>
                    </nav>
                </div><!-- .sidebar-wrapepr -->
            </div>
        </aside>
        <div class="col-8">
        <div class="title"><h1>Bienvenu à votre session</h1></div>
        </div>
  </div>
</div>      


@endsection
