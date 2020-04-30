@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">domaine</th>
        <th scope="col">filière</th>
        <th scope="col">date d'ajout</th>
      </tr>
    </thead>
    <tbody>
      @foreach($soutenances as $sout)
      <tr>
        <th scope="row">1</th>
        <td>{{$sout->demande}}</td>
        <td>{{$sout->date}}</td>
        <td>{{$sout->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection