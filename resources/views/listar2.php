<html>
<head>
<title>Listar Clientes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Listar Cliente</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Ação</td>
		</tr>
	<?php  
		foreach($nomes as $key => $value){
			echo "<tr>";
			echo "<td>".$key."</td>"; 
			echo "<td>".$value."</td>"; 
			echo "<td><a href='".action("ClienteController@editar")."?id=".$key."'> Editar </a></td>";
			//echo "<td><a href='".action("ClienteController@editar")."/".$key."'>Editar</a></td>";
			echo "</tr>";
		}		
	?>
	</table>
	</div>
</body>
</html>