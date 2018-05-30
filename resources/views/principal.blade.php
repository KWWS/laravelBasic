<html>
<head>
<title>Sistema de Gerenciamento de Clientes - @yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<h1>Sistema de Gerenciamento de Clientes</h1>
<img src="<?php echo url('talk.png');?>">
				<div class="container">
						@yield('content')
				</div>	
</body>
</html>