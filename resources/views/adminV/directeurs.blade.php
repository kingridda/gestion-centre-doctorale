@extends('layouts.app')
@section('content')

<div id="addE" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter un directeur de Thèse </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/dir"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">nom complet</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">CIN </label>
                            <div class="col-md-6">
                                <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" required autofocus>

                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pa" class="col-md-4 col-form-label text-md-right">mot de passe</label>
                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row form-group">
                          <div class="offset-4 pt-4 col-md-4 col-form-label" >
                              <button class="btn btn-primary">Ajouter</button>
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
                    <h4 class="modal-title">!! Attention vous aller supprimer un directeur de Thèse !! </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/dir/s"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="supp_id" class="col-md-4 col-form-label text-md-right">identifiant de directeur de thèse à supprimer</label>
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
	<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">identifiant</th>
        <th scope="col">domaine</th>
        <th scope="col">filière</th>
        <th scope="col">date d'ajout</th>
      </tr>
    </thead>
    <tbody>
      @foreach($encadrants as $en)
      <tr>
        <th scope="row">{{$en->id}}</th>
        <td>{{$en->name}}</td>
        <td>{{$en->cin}}</td>
        <td>{{ $en->cin}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="mb-2 d-flex justify-content-between" style="color:#ffffff">
        <a class="btn btn-primary" data-toggle="modal" data-target="#addE">Ajouter une Encadrant</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#SuppD">Supprimer un Encadrant</a></div>
    </div>
@endsection
