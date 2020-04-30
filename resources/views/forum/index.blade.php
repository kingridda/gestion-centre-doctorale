@extends('layouts.app')
@section('content')

<div id="addQ" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">poser question </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/forum" enctype="multipart/form-data"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right">question</label>
                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question" required autofocus>

                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                          <label for="image" class="col-md-4 col-form-label text-md-right">illustration</label>
                          <div class="col-md-6">
                                     <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="offset-4 pt-4 col-md-4 col-form-label" >
                              <button class="btn btn-primary">poser</button>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
      </div>
</div>

<div class="container">
  <div class="col-12">
    <div class="mb-2"><a class="btn btn-primary" data-toggle="modal" data-target="#addQ">poser une question au forum</a></div>
  </div>
  <div>
	<table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col">#</th>
      <th scope="col">question</th>
      <th scope="col">NOMBRE REPONSE</th>
      <th scope="col">DATE</th>
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $q)
    <tr>
      <th scope="row">1</th>
      <td><a href="/forum/{{$q->id}}" style="textDecoration: none;">{{$q->question}}</a></td>
      <td>nb_reponse</td>
      <td>{{$q->created_at}}</td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
  </table>
  </div>
</div>
@endsection