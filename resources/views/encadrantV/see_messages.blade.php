@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
	  	<thead class="thead-dark">
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">nom</th>
		      <th scope="col">prenom</th>
		      <th scope="col">objet</th>
		      <th scope="col">date</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@foreach($messages as $message)
	    	<tr>
		      <th scope="row">vu</th>		     
		      <td>{{$users->find($message->user_id)->name}}</td>
		      <td>{{$users->find($message->user_id)->prenom}}</td>
		      <td>{{$message->objet}}</td>
		      <td>{{$message->created_at}}</td>

	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection