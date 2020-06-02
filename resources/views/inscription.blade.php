<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inscription</title>
</head>
<body>
	
	{{data->prenom}}
	<img src="{{data->avatar}}">
	<table>
		<tbody>
			<tr>
				<th>nom:</th>
				<td>{{data->name}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>