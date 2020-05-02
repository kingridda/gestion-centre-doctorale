@extends('layouts.app')
@section('content')
<div id="addP" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Changer la photo </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/show" enctype="multipart/form-data"  method="POST">
                        @csrf
                        
                        <div class="row form-group">
                          <label for="image" class="col-md-4 col-form-label text-md-right">uploader</label>
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
                              <button class="btn btn-primary">sauvgarder</button>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
      </div>
</div>

	<div class="container">
		<div class="row row-content mt-5">
			<div class="col-lg-4 " >
				<center>
				<img src="/avatars/{{$user->avatar}}" style="border-radius:100% ">
				<div>
					<div><a class="btn btn-primary" data-toggle="modal" data-target="#addP"> Changer la photo</a></div>
				</div>
			</center>

			</div>
			<div class="col-lg-3  mt-4 " >
				<center>
					<h2>
						{{$user->name }} 
						<br>
						
						{{$user->prenom}}
						<br>
				
					
				
					</h2>
				</center>
			</div>

			<div class="col-lg-8 ml-5 mt-4 " style="word-spacing: 2rem " >
				<table class="table">
					<tbody>
				<centre>
				<h2>
				<tr>
					<th scope="col">Cin</th>
					<th scope="col">{{$user->cin}}</th>
				</tr>
				<tr>
					<th scope="col">Email</th>
					<th scope="col">{{$user->email}}</th>
				</tr>
				<tr>
					<th scope="col">Adresse</th>
					<th scope="col">{{$user->adresse}}</th>
				</tr>
				<tr>
					<th scope="col">Ville</th>
					<th scope="col">{{$user->ville}}</th>
				</tr>
				<tr>
					<th scope="col">Encadrant</th>
					<th scope="col">{{$user->encadrant_id}}</th>
				</tr>
				</h2>
			</centre>
			</tr>
			</tbody>
			</table>
			</div>

			</div>
			</div>
		</div>
	</div>
@endsection
