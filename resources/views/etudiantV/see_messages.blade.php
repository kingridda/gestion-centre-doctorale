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
	  		@foreach($messages as $message)
	    	<tr>		     
		      <td>{{$message->created_at}}</td>
		      <td>{{$message->objet}}</td>
		      <td>{{$message->contenu}}</td>
		      <th scope="row">vu</th>
	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection