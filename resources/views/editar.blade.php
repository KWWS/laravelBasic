 @extends('principal')
 @section('title', 'Editar Cliente')
 @section('content')
	<h1>Editar Cliente - <?php echo $id?></h1>
	<form>
		<div class="input-group input-group-sm mb-3">
			<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
			</div>
			<input type="text" class="form-control" aria-label="Small" placeholder="Nome:" aria-describedby="inputGroup-sizing-sm">
		</div>
		<div class="input-group input-group-sm mb-3">
			<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
			</div>
			<input type="text" class="form-control" aria-label="Small" placeholder="@" aria-describedby="inputGroup-sizing-sm">
		</div>
		<div class="input-group input-group-sm mb-3">
			<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Telefone</span>
			</div>
			<input type="text" class="form-control" aria-label="Small" placeholder="Telefone:" aria-describedby="inputGroup-sizing-sm">
		</div>
		<input type="submit" value="Cadastrar">
	</form>
	<a href="<?php echo action('ClienteController@listar2'); ?>">Listar Cliente</a>
	@stop
	

 