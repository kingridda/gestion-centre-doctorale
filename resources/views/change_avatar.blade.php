@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-6 " >
				<center>
					<img src="/avatars/{{$user->avatar}}" style="border-radius:100% ">
				</center>
			</div>
			<div class="col-lg-6 mt-5">
				<form enctype="multipart/form-data" action="/change_avatar" method="POST">
			
				<input type="file" name="avatar">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit" class="btn btn-primary">enregistre</button>
				</form>
			</div>
		</div>
	</div>
@endsection