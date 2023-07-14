<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica as credenciais (usuário e senha)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica as credenciais do usuário (exemplo simples)
    if ($username === 'admin' && $password === 'admin123') {
        // Redireciona para a página de sucesso
        header('Location: principal.php');
        exit;
    } else {
        $message = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="my-container-manager">
        <h2>Não foi possível realizar o login</h2>
        <p><?php echo $message; ?></p>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
