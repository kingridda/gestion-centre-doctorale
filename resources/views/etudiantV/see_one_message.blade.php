@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header d-flex" style="justifyContent: space-between;">
			<div>
			{{$message->created_at}}
			</div>
  	</div>
		<div class="card-body">
			
			<p>{{$message->description}}</p>
			
		</div>
	</div>
</div>
@endsection