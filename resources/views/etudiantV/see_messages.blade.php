@extends('layouts.app')
@section('content')
  
<div class="container">
	<table class="table table-striped">
	  	<thead class="thead-dark">
	    	<tr>
		      <th scope="col">Date</th>
		      <th scope="col">Source</th>
		      <th scope="col">Objet</th>
		      <th scope="col">Contenu</th>
		      <th scope="col"> </th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@isset($messages)
	  		@foreach($messages as $message)
		    <tr>
			    <td scope="row">{{$message->created_at}}</td>	
			    @if($message->source == 1)	     
			    <td scope="row">Moi</td>	
			    @else
			    <td scope="row">Encadrant</td>
			    @endif	     
			      <td>{{$message->objet}}</td>
			      <td class="d-none d-sm-block text-wrap">{{$message->contenu}}</td>
				  <td><a href="/profile/encm/show/{{$message->id}}">visualiser</a></td>
		    </tr>
	    	@endforeach
	    	@else
	    	no message available
	    	@endisset
		</tbody>
	</table>
</div>

@endsection