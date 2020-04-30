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
      @foreach($docs as $doc)
      <tr>
        <th scope="row">1</th>
        <td>{{$doc->name}}</td>
        <td>{{$doc->prenom}}</td>
        <td>{{$doc->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection