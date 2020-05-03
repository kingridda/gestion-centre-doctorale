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
<<<<<<< HEAD
	    	<tr>
		      <th scope="row">#</th>		     
=======
	    	<tr>		     
>>>>>>> 4a9f5731b1eca1b508e750b9de441f9c0f803c6c
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