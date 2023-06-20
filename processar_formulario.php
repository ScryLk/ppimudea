<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=mudea", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException) {
    echo "<script>alert('Erro ao conectar no Banco de Dados');</script>";
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    try {
        $sql = "INSERT INTO tabela_emails (email) VALUES (?)";
        $preparo = $conexao->prepare($sql);
        $preparo->execute([$email]);
        echo "<script>alert('E-mail salvo no banco de dados com sucesso!');</script>";
    } catch (PDOException) {
        echo "<script>alert('Erro ao cadastrar E-mail');</script>";
    }
}
?>
