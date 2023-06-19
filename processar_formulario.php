<?php
// variaveis
$usuario = 'root';
$senha = '';
try {
    $conexao = new PDO("mysql:host=localhost; dbname=mudea", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>alert('Erro ao cadastrar E-mail');</script>";
    exit();
}
//Verifica se a tabela existe
try {
    $sql = "SELECT 1 FROM tabela_emails";
    $conexao->query($sql);
} catch (PDOException $e) {
    $sql = "CREATE TABLE tabela_emails (
              id INT AUTO_INCREMENT PRIMARY KEY,
              email VARCHAR(100) NOT NULL
            )";
    $conexao->exec($sql);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    try {
        $sql = "INSERT INTO tabela_emails (email) VALUES (?)";
        $preparo = $conexao->prepare($sql);
        $preparo->execute([$email]);
        echo "<script>alert('E-mail salvo no banco de dados com sucesso!');</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao cadastrar E-mail');</script>";
    }
}
?>
