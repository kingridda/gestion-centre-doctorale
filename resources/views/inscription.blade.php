<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inscription</title>
	<style type="text/css"  media="screen">
		 html {
                margin: 0;
            }
            body {
                
                margin: 36pt;
            }
	</style>
</head>
<body>
	<div style="margin-top: 0px;">
		<img src="public\img\um5.jpg" alt="logo" height="100" style="float: right;">
      	<img src="public\img\ensias.jpg" alt="logo" height="100"style="float: left;">
    </div>
	<div  style="float: left; margin-top: 200px;">
		<img src="/storage/{{$data->avatar}}" width="100">
	</div>
	<div style="margin-top: 200px;">
		<div style="text-align: center;">
				<h2>Recu d'inscription</h2>
				<p>Centre d'étude doctorale</p>
				<p>2020/2021</p>
		</div>
		<div style="margin-left: 100px;">
			<table>
				<tbody>
					<tr>
						<td><h3>Nom:</h3></td>
						<td>{{$data->name}}</td>
					</tr>
					<tr>
						<td><h3>Prènom:</h3></td>
						<td>{{$data->prenom}}</td>
					</tr>
					<tr>
						<td><h3>Date inscription:</h3></td>
						<td>{{$data->created_at}}</td>
					</tr>
					<tr>
						<td><h3>Carte d'identité nationale:</h3></td>
						<td>{{$data->cin}}</td>
					</tr>
					<tr>
						<td><h3>Email:</h3></td>
						<td>{{$data->email}}</td>
					</tr>
					<tr>
						<td><h3>Numéro Gsm:</h3></td>
						<td>{{$data->gsm}}</td>
					</tr>
					<tr>
						<td><h3>Adresse:</h3></td>
						<td>{{$data->adresse}}</td>
					</tr>
					<tr>
						<td><h3>Ville:</h3></td>
						<td>{{$data->ville}}</td>
					</tr>
					<tr>
						<td><h3>Salarié:</h3></td>
						@if($data->salarie == 0)
						<td> Non</td>
						@else
						<td>Oui</td>
						@endif
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div style="margin-top: 60px;">
		<div style="float: left;">Le ............................ à............................</div>
		<div style="float: right;">Signature du candidate</div>
	</div>
</body>
</html>