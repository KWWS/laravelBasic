<html>
<head>
<title>Editar Cliente</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
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

	

</body>
</html>