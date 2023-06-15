<?php
// Informações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'muda';
$usuario = 'root';
$senha = '';

// Conectar ao banco de dados
try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>alert('Erro ao cadastrar E-mail');</script>";
    exit();
}

// Verificar se a tabela existe
try {
    $sql = "SELECT 1 FROM tabela_emails LIMIT 1";
    $conexao->query($sql);
} catch (PDOException $e) {
    // A tabela não existe, então vamos criá-la
    $sql = "CREATE TABLE tabela_emails (
              id INT AUTO_INCREMENT PRIMARY KEY,
              email VARCHAR(255) NOT NULL
            )";
    $conexao->exec($sql);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar o e-mail do formulário
    $email = $_POST['email'];

    // Preparar e executar a consulta SQL para inserir o e-mail no banco
    try {
        $sql = "INSERT INTO tabela_emails (email) VALUES (?)";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$email]);

        echo "<script>alert('E-mail salvo no banco de dados com sucesso!');</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao cadastrar E-mail');</script>";
    }
}
?>
