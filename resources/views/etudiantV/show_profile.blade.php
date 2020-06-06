@extends('layouts.app')
@section('content')
<div id="addP" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Changer la photo</h4>
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

				<img src="/storage/{{ $user->avatar }}" style="border-radius:100%; height: 100px;">

				<div>
					<div><a class="btn btn-primary" data-toggle="modal" data-target="#addP"> Changer la photo</a></div>
				</div>
			</center>

			</div>
			<div class="col-sm-3  mt-5 " >
				<center>
					<h2>
						{{strtoupper($user->name)}} 
						<br>
						
						{{$user->prenom}}
						<br>
				
					
				
					</h2>
				</center>
			</div>

			
			
			<div class="col-lg-12 ml-5 mt-4 " style="word-spacing: 1rem " >
				<table class="table">
					<tbody>
				<centre>
				<tr>
					<th scope="col"><h2>CIN:</h2></th>
					<th scope="col"><h2>{{$user->cin}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Email:</h2></th>
					<th scope="col"><h2>{{$user->email}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Tél. mobile:</h2></th>
					<th scope="col"><h2>{{$user->gsm}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Adresse:</h2></th>
					<th scope="col"><h2>{{$user->adresse}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Ville:</h2></th>
					<th scope="col"><h2>{{$user->ville}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Encadrant:</h2></th>
					
					<th scope="col"><h2>@isset($encadrant){{$encadrant}}@endisset</h2></th>
					
				</tr>
				<tr>
					<th scope="col"><h2>Sujet de recherche:</h2></th>
					
					<th scope="col"><h2>@isset($these){{$these}}@endisset</h2></th>
					
				</tr>
				<tr>
					<th scope="col"><h2>Structure de recherche:</h2></th>
					
					<th scope="col"><h2>@isset($structure){{$structure}}@endisset</h2></th>
					
				</tr>
				<tr>
				<th scope="col"><h2>Salarié:</h2></th>
					@if($user->salare)
				<th scope="col"><h2>Oui</h2></th>
					@else
				<th scope="col"><h2>Non</h2></th>
					@endif
				
				</tr>
			</centre>
			
			</tbody>
			</table>
			</div>

			</div>
			</div>
		</div>
	</div>
@endsection
