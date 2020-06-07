<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
	<style type="text/css"  media="screen">
		 html {
                margin: 0px;
            }
            body {
                
                margin: 36pt;
            }
            
	</style>
</head>
<body>
	<div style="margin-top: 0px;">
		<img src="\img\um5.jpg" alt="logo" height="100" style="float: right;">
      	<img src="\img\ensias.jpg" alt="logo" height="100"style="float: left;">
    </div>
	<div style="text-align: center; margin-top: 30px;">
				<h2>List des doctorants </h2>
				<p>Centre d'étude doctorale</p>
				<p>2020/2021</p>

		</div>
	
	<div style="margin-left: 10px;">
		<table>
			<thead>
				<th>nom</th>
				<th>prènom</th>
				<th>Email</th>
				<th>CIN</th>
				
				<th>directeur de thèse</th>
				<th>Sujet</th>
			</thead>
			<tbody>
				<tr></tr>
				@foreach($data as $doc)

				<tr>
					<td>{{$doc->name}}</td>
					<td>{{$doc->prenom}}</td>
					<td>{{$doc->email}}</td>
					<td>{{$doc->cin}}</td>
					
					<td>{{$doc->encadrant}}</td>
					<td>{{$doc->sujet}}</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
	
</body>
</html>