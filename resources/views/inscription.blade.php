<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inscription</title>
</head>
<body>
	<div style="float: right;">
	<img src="/storage/{{$data->avatar}}" width="100">
	</div>
	<div style="text-align: center;">
	<table>
		<tbody>
			<tr>
				<th>nom:</th>
				<td>{{$data->name}}</td>
			</tr>
			<tr>
				<th>prènom:</th>
				<td>{{$data->prenom}}</td>
			</tr>
			<tr>
				<th>date inscription</th>
				<td>{{$data->created_at}}</td>
			</tr>
		</tbody>
	</table>
	</div>
</body>
</html>