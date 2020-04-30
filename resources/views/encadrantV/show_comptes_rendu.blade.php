@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
	  	<thead class="thead-light">
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">titre</th>
		      <th scope="col">date</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		@foreach($users[0]->rapports as $rp)
	    	<tr>
	    		<th>{{$rp->title}}</th>
	    		<td>{{$rp->created_at}}</td>
		      	<td>{{$users[0]->these->sujet}}</td>
	    	</tr>
	    	@endforeach
		</tbody>
	</table>
</div>
@endsection