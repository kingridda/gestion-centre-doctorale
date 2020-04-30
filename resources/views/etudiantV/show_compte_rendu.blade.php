@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
	  	<thead class="thead-dark">
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">titre</th>
		      <th scope="col">date</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		
	  		@foreach($crs as $key => $cr)
	    	<tr>
	    		<th>{{$key+1}}</th>
	    		<td>{{$cr->title}}</td>
		      	<td>{{$cr->created_at}}</td>
	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection