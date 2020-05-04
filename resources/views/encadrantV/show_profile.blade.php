@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row row-content mt-5">
			<div class="col-lg-4 " >
				<center>
				<img src="/storage/{{encadrant->avatar}}" style="border-radius:100%; width:80% ; ">
			</center>

			</div>
			<div class="col-lg-3 pt-5" >
				<center>
					<h2>
						{{$encadrant->name }} 
						<br>			
					</h2>
				</center>
			</div>	
			<div class="col-lg-12 ml-5 mt-4 " style="word-spacing: 1rem " >
				<table class="table">
					<tbody>
				<centre>
				<tr>
					<th scope="col"><h2>Email</h2></th>
					<th scope="col"><h2>{{$encadrant->email}}</h2></th>
				</tr>
				<tr>
					<th scope="col"><h2>Cin</h2></th>
					<th scope="col"><h2>{{$encadrant->cin}}</h2></th>
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
