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
            </select>
        </div>
<<<<<<< HEAD
    </div>
</div>
<div class="container">
    <div class="row row-content">

        <div class="col-2">
            <div><a href="admin/theses">voir les theses en cours</a></div>
            <div><a href="admin/dir">voir la list des directeurs des thèses</a></div>
            <div><a href="admin/doc">voir la list des doctorants</a></div>
            <div><a href="admin/soutenances">voir les demandes de soutenance</a></div>
            <div><a href="admin/liaison">lier les theses au doctorants</a></div>
            <div><a href="admin/liaison/s">supprimer une liaisone thèse-doctorant</a></div>
=======
    

>>>>>>> 122889b3f5d643afa0da9e6be7fd3dcfbf87df07

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
