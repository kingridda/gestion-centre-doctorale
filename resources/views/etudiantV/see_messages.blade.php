@extends('layouts.app')
@section('content')
  
<div class="container">
	<table class="table table-striped">
	  	<thead class="thead-dark">
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">Objet</th>
		      <th scope="col">Descripion</th>
		      <th scope="col">Date</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@isset($messages)
	  		@foreach($messages as $message)
	    	<tr>
		      <th scope="row">#</th>		     
	    	<tr>		     
		      <td>{{$message->created_at}}</td>
		      <td><a href="/profile/encm/show/{{$message->id}}">{{$message->objet}}</a></td>
		      <td>{{$message->contenu}}</td>
		      <th scope="row">vu</th>
	    	</tr>
	    	@endforeach
	    	@else
	    	no message available
	    	@endisset
		</tbody>
	</table>
</div>

@endsection