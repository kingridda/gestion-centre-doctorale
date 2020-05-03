@extends('layouts.app')
@section('content')
<div id="change" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title "><span> Valider ou modifie une soutenance </span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/soutenances/m"  method="POST">
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
                            <label for="date" class="col-md-4 col-form-label text-md-right"> DATE </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}"  autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="heure" class="col-md-4 col-form-label text-md-right"> DATE </label>

                            <div class="col-md-6">
                                <input id="heure" type="heure" class="form-control @error('heure') is-invalid @enderror" name="heure" value="{{ old('heure') }}"  autocomplete="heure" autofocus>

                                @error('heure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amphi" class="col-md-4 col-form-label text-md-right"> Amphi(optionel) </label>

                            <div class="col-md-6">
                                <input id="amphi" type="amphi" class="form-control @error('amphi') is-invalid @enderror" name="amphi" value="{{ old('amphi') }}"  autocomplete="amphi" autofocus>

                                @error('amphi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right"> Directeur de jury (optionel)</label>

                            <div class="col-md-6">
                                <input id="jury" type="jury" class="form-control @error('jury') is-invalid @enderror" name="jury" value="{{ old('jury') }}"  autocomplete="jury" autofocus>

                                @error('jury')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        

                        <div class="row form-group">
                          <div class="offset-4 pt-4 col-md-4 col-form-label" >
                              <button class="btn btn-primary">Lancer le changement</button>
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
                    <h4 class="modal-title">!! Attention vous aller supprimer une soutenance !! </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/soutenances/s"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="supp_id" class="col-md-4 col-form-label text-md-right">identifiant de soutenance à supprimer</label>
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
      @foreach($soutenances as $sout)
      <tr>
        <th scope="row">{{$sout->id}}</th>
        <td>{{$sout->demande}}</td>
        <td>{{$sout->date}}</td>
        <td>{{$sout->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="mb-2 d-flex justify-content-between" style="color:#fff">
        <a class="btn btn-primary" data-toggle="modal" data-target="#change">Valider ou modifie une Soutenance</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#SuppD">Supprimer une Soutenance</a>
    </div>

</div>
@endsection
