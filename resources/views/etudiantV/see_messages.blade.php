@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
	  	<thead class="thead-dark">
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">date</th>
		      <th scope="col">objet</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@foreach($messages as $message)
	    	<tr>
		      <th scope="row">vu</th>		     
		      <td>{{$message->created_at}}</td>
		      <td>{{$message->objet}}</td>
	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection