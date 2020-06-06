@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		@isset($message)
		<div class="card-header d-flex justify-content-between">
			
				<span>@if($message->source == 0)Moi ==> {{$doctorant->name.' '.$doctorant->prenom.' ('.$sujet.')'}} @else {{$doctorant->name.' '.$doctorant->prenom .' ('.$sujet.')'}} ==> Moi @endif</span>

			<span >{{$message->created_at}}</span>
  	</div>
		<div class="card-body">
			<h3>Objet: {{$message->objet}}</h3>
			<p class="p-5">{{$message->contenu}}</p>
		</div>
		@endisset
	</div>
</div>
@endsection 