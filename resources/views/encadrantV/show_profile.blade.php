@extends('layouts.app')
@section('content')

<div class="container">
		<div class="card text-center">
			  <div class="card-header">
			    Directeur de Thèse
			  </div>
			  <div class="card-body">
			  	<img src="/storage/{{$encadrant->avatar}}" class="rounded-circle" width="300">
			    <h5 class="card-title">{{$encadrant->name }}</h5>
			    <p class="card-text">{{$encadrant->job_title}}</p>
			    <p>{{$encadrant->email}}</p>
			  </div>
			  <div class="card-footer text-muted">
			    Ensias
			  </div>
			</div>

</div>


@endsection
