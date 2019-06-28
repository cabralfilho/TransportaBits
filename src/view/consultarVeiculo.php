<!-- Interface com os campos necessários para consultar os dados de veículos -->

<?php
include_once("../persistence/conexao.php");
$conexao = new Connection();
$conexao->conectar();
$query = "SELECT * FROM `Veiculo` ";
$results = mysqli_query($conexao->getLink(), $query);
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../node_modules/js/sweetalert.js"></script>
	<title>Consultar</title>
</head>

<body>
	<style>
		.myBtnRed {
			font-size: 12px;
			width: 80px;
			border-radius: 4px;
			padding: 3px;
			color: white;
			background-color: red;
			border-color: red;
		}
	</style>

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
					<a class="btn btn-primary minhaNavbar" href="gerenciarVeiculos.php">VOLTAR</a>
					<a class="btn btn-primary minhaNavbar" href="../index.php">LOGOUT</a>
				</ul>
			</div>
		</nav>
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
			<h2>Consultar Veículo</h2>
			<form action="../controller/C_consultarVeiculo.php" method="POST">
				Placa:<select name="codigo">
					<?php while ($row = $results->fetch_assoc()) : ?>
						<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
					<?php endwhile ?>
				</select>
				<br />
				<br />
				<button class="btn btn-dark" type="submit"> Consultar </button>
			</form>
			<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
				<?php
				session_start();
				$objeto = $_SESSION["result"];
				?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col" class="text-center">Placa</th>
							<th scope="col" class="text-center">Modelo</th>
							<th scope="col" class="text-center">Cor</th>
							<th scope="col" class="text-center">Ano</th>
							<th scope="col" class="text-center">Chassi</th>
							<th scope="col" class="text-center">Excluir</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><?= $objeto['Placa'] ?></td>
							<td class="text-center"><?= $objeto['Modelo'] ?></td>
							<td class="text-center"><?= $objeto['Cor'] ?></td>
							<td class="text-center"><?= $objeto['Ano'] ?></td>
							<td class="text-center"><?= $objeto['Chassi'] ?></td>
							<td class="text-center"><button onclick="location.href='../controller/C_excluirVeiculo.php?codigo=<?= $objeto['Placa'] ?>';" type="button" class="myBtnRed">Excluir</button></td>
						</tr>
					</tbody>
				</table>
			<?php } ?>

			<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "false") { ?>
				<script>
					Swal.fire({
						type: 'error',
						title: 'Veiculo não excluido',
						text: 'Veiculo vinculado à um rastreador ou motorista!'
					})
				</script>
			<?php } ?>

			<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "true") { ?>
				<script>
					Swal.fire({
						type: 'success',
						title: 'Veiculo excluido'
					})
				</script>
			<?php } ?>
		</div>
	</div>
</body>

</html>