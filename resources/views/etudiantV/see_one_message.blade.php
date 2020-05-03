@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header d-flex" style="justifyContent: space-between;">
			<div>
				@isset($message)
			{{$message->created_at}}
				@else 
				<span class="alert">no messages available</span>
				@endisset
			</div>
  	</div>
		<div class="card-body">
			@isset($message)
			<p>{{$message->description}}</p>
			@endisset
		</div>
	</div>
</div>
@endsection