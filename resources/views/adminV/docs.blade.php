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
                    <form action=""  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">nom</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>

                                @error('name')
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

<div class="container">
  <div class="mb-2"><a class="btn btn-primary" data-toggle="modal" data-target="#change">Changer les données d'un étudiant</a></div>
	<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">domaine</th>
        <th scope="col">filière</th>
        <th scope="col">date d'ajout</th>
      </tr>
    </thead>
    <tbody>
      @foreach($docs as $doc)
      <tr>
        <th scope="row">1</th>
        <td>{{$doc->name}}</td>
        <td>{{$doc->prenom}}</td>
        <td>{{$doc->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection