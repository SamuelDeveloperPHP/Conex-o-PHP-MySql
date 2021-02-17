<?Php
$servidor = "localhost";
$usuario = "nome_usuario";
$senha = "passwor";
$dbname = "nome_bancao_dados";

// Criar uma ligação
$Conn = mysqli_connect ($servername, $ username, $ password);

// Teste de conexão
if(! $conn) {
	die( "A ligação falhou:" mysqli_connect_error ().);
}
	echo "conectado com sucesso";
?>