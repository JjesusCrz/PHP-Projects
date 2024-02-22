

<?php 

    //require_once('conexao.php');

  //  $usuario = $_POST['usuario'];
//
  //  $email = $_POST['email'];
//
//    $senha = $_POST['senha'];

 //   $bancoDados = new db(); 
//
  ///  $link = $bancoDados->conecta_mysql();
//
  //  $sql = "insert into usuarios(usuario, email, senha) values('//$usuario', '$email', '$senha')";
//
 ///       mysqli_query($link, $sql);
//
require_once('conexao.php');

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos estão definidos e não estão vazios
    if (isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        // Atribui os valores dos campos a variáveis
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Conecta ao banco de dados
        $bancoDados = new db();
        $link = $bancoDados->conecta_mysql();

        // Prepara a query SQL
        $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

        // Executa a query SQL e verifica se foi bem-sucedida
        if (mysqli_query($link, $sql)) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário: " . mysqli_error($link);
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($link);
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Método de requisição inválido.";
}



?>
