<?php
session_start();
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utilizador = $_POST['utilizador'] ?? '';
    $password = $_POST['password'] ?? '';
    // Utilizador e password definidos no código
    if ($utilizador === 'aluno' && $password === '12345') {
        $_SESSION['autenticado'] = true;
        header('Location: exclusivo.php');
        exit;
    } else {
        $erro = 'Utilizador ou palavra-passe incorretos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Reservada - Roupa Desportiva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Roupa Desportiva</h1>
        <nav>
            <a href="index.html">Início</a>
            <a href="conteudos.html">Conteúdos</a>
            <a href="contacto.html">Contacto</a>
            <a href="login.php">Área Reservada</a>
        </nav>
    </header>
    <main>
        <h2>Login</h2>
        <?php if ($erro): ?>
            <p style="color:red;"><?= $erro ?></p>
        <?php endif; ?>
        <form method="post">
            <label for="utilizador">Utilizador:</label>
            <input type="text" id="utilizador" name="utilizador" required><br>
            <label for="password">Palavra-passe:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Entrar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Roupa Desportiva</p>
    </footer>
</body>
</html>