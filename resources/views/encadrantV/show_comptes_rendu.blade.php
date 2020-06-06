@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
	  	<thead class="thead-light">
	    	<tr>
		      <th scope="col">Date</th>
		      <th scope="col">Doctorant</th>
		      <th scope="col">titre</th>
		      <th scope="col">description</th>
		      <th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@foreach($crs as $cr)
	    	<tr>
	    		<td>{{$cr->created_at}}</td>
	    		<td>{{$cr->name.' '.$cr->prenom}}</td>
		      	<td class="text-wrap">{{$cr->title}}</td>
		      	<td class="d-none d-sm-block text-wrap">{{$cr->description}}</td>
		      	<td><a href="/storage/{{$cr->attachment}}">visualiser</a></td>

	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection