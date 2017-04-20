<!doctype html>
<html>
	<head>
		<title>Bingo</title>
	</head>

	<body>
		<div class="all">
			
			<h2>Bingo</h2>

			<div class="contentInfo">

				<div class="numberPlayer">
					<p>Numero de jogadores cadastrados: <span><?php echo $numberPlayer ?></span></p>

					<p>Nome dos jogadores:</p>
					<ul>
<?
include ('conexao.class.php');
$minhaConexao = new Conexao();
$minhaConexao->open();
$minhaConexao->statusCon();
?>
					</ul>
				</div>

				<div class="newPlayer">
					<form action="config/cadastroJogador.class.php" method="post">
						<input type="text" name="namePlayer" placeholder="Nome do jogador:" />
					    <input type="submit" value="Cadastrar jogador" />
					</form>
				</div>
				
			</div>
			
		</div>
	</body>
</html>