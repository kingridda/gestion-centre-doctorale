@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row row-content mt-5">
			<div class="col-lg-4 " >
				<center>
				<img src="/storage/{{ $encadrant->avatar }}" class="w-100 ">
				<div>
				</div>
			</center>

			</div>
			<div class="col-lg-3  mt-4 " >
				<center>
					<h2>
						{{$encadrant->name }} 
						<br>
						
						watever
						<br>
				
					
				
					</h2>
				</center>
			</div>

			<?php
			if ($user->salarie == 0)
			{
				$boursier = "non boursier" ;
			}
			else {
				$boursier = "boursier";
			}
			
			?>
			
			<div class="col-lg-12 ml-5 mt-4 " style="word-spacing: 1rem " >
				<table class="table">
					<tbody>
				<centre>
				<tr>
					<th scope="col"><h2>Cin</h2></th>
					<th scope="col"><h2>{{$user->cin}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Email</h2></th>
					<th scope="col"><h2>{{$user->email}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Adresse</h2></th>
					<th scope="col"><h2>{{$user->adresse}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Ville</h2></th>
					<th scope="col"><h2>{{$user->ville}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Encadrant</h2></th>
					<th scope="col"><h2>{{$user->encadrant_id}}</h2></th>
				</tr>
					<th scope="col"><h2>Boursier</h2></th>
					<th scope="col"><h2>{{$boursier}}</h2></th>
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
