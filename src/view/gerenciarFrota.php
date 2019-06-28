<!-- Interface com os campos necessários para navegar entre as opções de cadastrar, buscar, atualizar e excluir veículos -->

<html lang="pt-br">
<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Gerenciar Frota</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
								<span class="navbar-toggler-icon"></span>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="gerenciarFrota.php"> Frota</a>
								<a class="dropdown-item" href="gerenciarMotoristas.php"> Motoristas</a>
								<a class="dropdown-item" href="gerenciarRastreadores.php"> Rastreadores</a>
								<a class="dropdown-item" href="gerenciarVeiculos.php"> Veículos</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<a class="btn btn-primary minhaNavbar" href="../controller/C_logout.php">LOGOUT</a>
					</ul>
				</div>
			</nav>

			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
				<h2>Gerenciamento de Frota</h2>
				<br />

				<div class="row d-flex justify-content-center mt-2">
					<a href="gerenciarConta.php" class="btn btn-dark btn-default">Gerenciar Conta</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2" >
					<a href="gerenciarMotoristas	.php" class="btn btn-dark">Gerenciar Motoristas</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2">
					<a href="gerenciarRastreadores.php" class="btn btn-dark btn-default ">Gerenciar Rastreadores</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2">
					<a href="gerenciarVeiculos.php" class="btn btn-dark btn-default">Gerenciar Veiculos</a><br />
				</div>
			</div>
		</div>
	</body>
</html>
