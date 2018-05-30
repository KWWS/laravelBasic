  @extends('principal')
  @section('title', 'Listar Cliente')
 @section('content')
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
	@stop