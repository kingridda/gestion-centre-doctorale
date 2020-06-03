@extends('layouts.app')
@section('content')
<div id="addR" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Repondre </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/forum/{{$question->id}}" enctype="multipart/form-data"  method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="response" class="col-md-4 col-form-label text-md-right">reponse</label>
                            <div class="col-md-6">
                                <textarea id="response" type="text" class="form-control @error('response') is-invalid @enderror" name="response" required autofocus> </textarea>

                                @error('response')
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
                              <button class="btn btn-primary">repondre</button>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
      </div>
</div>
<div class="container">
	<div class="card">
		<div class="card-header d-flex" style="justifyContent: space-between;">
			<div>
			{{$question->question}}
			</div>
			<div><a class="btn btn-primary" data-toggle="modal" data-target="#addR"> Repondre</a></div>
  			</div>
		<div class="card-body">
			@foreach($responses as $res)
			{{$res->reponse}}<br>
			@endforeach
		</div>
	</div>
</div>
@endsection