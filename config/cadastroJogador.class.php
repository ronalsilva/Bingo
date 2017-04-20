<?

include ('conexao.class.php');

$minhaConexao = new Conexao();
$minhaConexao->open();
$minhaConexao->statusCon();
$minhaConexao->close();
$minhaConexao->statusCon();

class Cadastro {

	private $nameJogador;
	
	function __construct($namePlayer) {
		$this->nameJogador = $namePlayer;
	}

	function cadastra($db, $table) {
		mysql_select_db($db, $minhaConexao->open());
		$query = "INSERT INTO $table VALUES ('$this->nameJogador')";
		mysql_query($query, $minhaConexao->open()) or die(mysql_error());
	}

	function getName() {
		return $this->nameJogador;
	}

}

	$cadastro = new Cadastro($_POST["namePlayer"]);

	if($minhaConexao->open()) {
		$cadastro->cadastra('bindo', 'jogador');

		echo "Seja bem vindo ao jogo ".$cadastro->getName();
	} else {
		echo "Não conectou ao BD";
		exit();
	}

?>