@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header d-flex justify-content-between">
			
				<span>@if($message->source)Moi ==> Encadrant @else Encadrant ==> Moi @endif</span>

			<span >{{$message->created_at}}</span>
  	</div>
		<div class="card-body">
			<h3>Objet: {{$message->objet}}</h3>
			<p class="p-5">{{$message->contenu}}</p>
		</div>
	</div>
</div>
@endsection