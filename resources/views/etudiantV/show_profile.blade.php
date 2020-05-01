@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-4 " >
				<center>
				<img src="/avatars/{{$user->avatar}}" style="border-radius:100% ">
				<div>
					<a href="/change_avatar" > changer la photo</a>
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

			<div class="col-lg-6 ml-3 mt-4 " >
				
				<h2> 
					Cin  
					<br>
				
					Email  
					<br>
				
					Adresse	 
					<br>
				
					Ville  
					<br>
				
					Encadrant 
				
					: {{$user->cin}}
					<br>
				
					: {{$user->email}}
					<br>
				
					: {{$user->adresse}}
					<br>
				
					: {{$user->ville}}
					<br>
				
					: {{$user->encadrant_id}}
				
				</h2>
			</div>
		</div>
	</div>
@endsection
