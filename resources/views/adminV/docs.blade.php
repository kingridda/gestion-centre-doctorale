@extends('layouts.app')
@section('content')
<div id="change" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header badge-danger">
                    <h4 class="modal-title "><span >!! Attention vous allez changer les données d'un étudiant dans le centre doctorale !!</span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/doc/m"  method="POST">
                        <span class="badge-danger offset-4">taper juste dans les champes que vous voullez changer</span>
                        @csrf
                        <div class="form-group row">
                            <label for="idU" class="col-md-4 col-form-label text-md-right">identifiant</label>

                            <div class="col-md-6">
                                <input id="idU" type="text" class="form-control @error('idU') is-invalid @enderror" name="idU" value="{{ old('idU') }}" required autocomplete="idU" autofocus>

                                @error('idU')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}"  autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">adresse</label>

                            <div class="col-md-6">
                                <input id="adresse" type="adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}"  autocomplete="adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="ville" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}"  autocomplete="ville">

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="gsm" class="col-md-4 col-form-label text-md-right">numéro gsm</label>

                            <div class="col-md-6">
                                <input id="gsm" type="gsm" class="form-control @error('gsm') is-invalid @enderror" name="gsm" value="{{ old('gsm') }}"  autocomplete="gsm">

                                @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">CIN</label>

                            <div class="col-md-6">
                                <input id="cin" type="cin" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}"  autocomplete="cin">

                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                          <div class="offset-4 pt-4 col-md-4 col-form-label" >
                              <button class="btn btn-primary">Changer</button>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
      </div>
</div>
<div id="SuppD" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header badge-danger">
                    <h4 class="modal-title">!! Attention vous aller supprimer un doctorant du centre doctorale !! </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/doc/s"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="supp_id" class="col-md-4 col-form-label text-md-right">identifiant de doctorant à supprimer</label>
                            <div class="col-md-6">
                                <input id="supp_id" type="text" class="form-control @error('supp_id') is-invalid @enderror" name="supp_id" required autofocus>
                                @error('supp_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                          <div class="offset-4 pt-4 col-md-4 col-form-label" >
                              <button class="btn btn-primary">Supprimer</button>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
      </div>
</div>



<div class="container">
	<table class="table">
    <thead class="thead-dark table-striped">
      <tr>
        <th scope="col">identifiant</th>
        <th scope="col">domaine</th>
        <th scope="col">filière</th>
        <th scope="col">date d'ajout</th>
      </tr>
    </thead>
    <tbody>
      @foreach($docs as $doc)
      <tr>
        <th scope="row">{{$doc->id}}</th>
        <td>{{$doc->name}}</td>
        <td>{{$doc->prenom}}</td>
        <td>{{$doc->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="mb-2 d-flex justify-content-between" style="color:#ffffff">
        <a class="btn btn-primary" data-toggle="modal" data-target="#change">Changer les données d'un doctorant</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#SuppD">Supprimer un doctorant</a>
    </div>

</div>
@endsection
