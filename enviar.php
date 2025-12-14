<?php
$servername = "localhost"; // ou o IP do seu servidor
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "portfolio_db"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = '';
$success = false;
$message = '';

// Validar e pegar dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string(trim($_POST['nome'] ?? ''));
    $email = $conn->real_escape_string(trim($_POST['email'] ?? ''));
    $mensagem = $conn->real_escape_string(trim($_POST['mensagem'] ?? ''));
    
    // Inserir dados na tabela
    $sql = "INSERT INTO mensagens_contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    
    if ($conn->query($sql) === TRUE) {
        $success = true;
        $message = "Mensagem enviada com sucesso!";
    } else {
        $success = false;
        $message = "Erro ao enviar mensagem: " . $conn->error;
    }
}

// Fechar conexão
$conn->close();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Mensagem Enviada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .box {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php if ($success): ?>
            <h2>Mensagem enviada com sucesso!</h2>
            <p>Obrigada pelo contato, <?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>.</p>
            <a href="index.html">Voltar ao portfólio</a>
        <?php else: ?>
            <h2>Ops — não foi possível enviar</h2>
            <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
            <a href="index.html">Voltar ao formulário</a>
        <?php endif; ?>
    </div>
</body>
</html>
