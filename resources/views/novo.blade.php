@extends('principal')
 @section('title', 'Editar Cliente')
 @section('content')
	<h1>Novo Cliente</h1>
	<form>
		Nome: <input type='text'></br>
		Email: <input type='text'></br>
		Telefone: <input type='text'></br>
		<input type="submit" value="Cadastrar">
	</form>
	<a href="<?php echo action("ClienteController@listar")?>">Listar Clientes</a>
@stop