<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
</head>
<body>
	<center><h3>List des doctorants du centre</h3></center>
	
	<center>
	<table>
		<thead>
			<th>nom</th>
			<th>prènom</th>
			<th>Email</th>
			<th>CIN</th>
			<th>Gsm</th>
			<th>directeur de thèse</th>
			<th>Sujet</th>
		</thead>
	</br>
		<tbody>
			@foreach($data as $doc)
			<tr>
				<td>{{$doc->name}}</td>
				<td>{{$doc->prenom}}</td>
				<td>{{$doc->email}}</td>
				<td>{{$doc->cin}}</td>
				<td>{{$doc->gsm}}</td>
				<td>{{$doc->encadrant}}</td>
				<td>{{$doc->sujet}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</center>
</body>
</html>