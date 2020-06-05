@extends('layouts.app')
@section('content')
<div id="addT" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter une Thèse </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/theses"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="domaine" class="col-md-4 col-form-label text-md-right">domaine</label>
                            <div class="col-md-6">
                                <input id="domaine" type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" required autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="filiere" class="col-md-4 col-form-label text-md-right">filière</label>
                            <div class="col-md-6">
                                <input id="filiere" type="text" class="form-control @error('filiere') is-invalid @enderror" name="filiere" required autofocus>

                                @error('filiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sujet" class="col-md-4 col-form-label text-md-right">sujet</label>
                            <div class="col-md-6">
                                <input id="sujet" type="text" class="form-control @error('sujet') is-invalid @enderror" name="sujet" required autofocus>

                                @error('sujet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="structure_id" class="col-md-4 col-form-label text-md-right">structure de recherche</label>
                            <div class="col-md-6">
                                <select id="structure" name="structure" class="form-control" required>
                                    @foreach($structures as $stru)
                                    <option value="{{$stru->id}}"> {{$stru->titre}}</option>
                                    @endforeach
                                </select>
                                </select>
                                @error('structure')
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
<div id="SuppT" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header badge-danger">
                    <h4 class="modal-title">!! Attention vous aller supprimer une thèse !! </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/theses/s"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="supp_id" class="col-md-4 col-form-label text-md-right">identifiant de la thèse à supprimer</label>
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
                              <button class="btn btn-primary">Ajouter</button>
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
        <th scope="col">Sujet</th>
      </tr>
    </thead>
    <tbody>
      @foreach($theses as $these)
      <tr>
        <th scope="row">{{$these->id}}</th>
        <td>{{$these->domaine}}</td>
        <td>{{$these->filiere}}</td>
        <td>{{$these->sujet}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="mb-2 d-flex justify-content-between" style="color:#ffffff">
        <a class="btn btn-primary" data-toggle="modal" data-target="#addT">Ajouter une Thèse</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#SuppT">Supprimer une Thèse</a>
    </div>
</div>
@endsection
