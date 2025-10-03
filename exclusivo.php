<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo Exclusivo - Roupa Desportiva</title>
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
        <h2>Conteúdo Exclusivo</h2>
        <p>Bem-vindo à área reservada! Aqui pode aceder a conteúdos especiais, como catálogos de roupa, descontos e downloads exclusivos.</p>
        <ul>
            <li><a href="#">Catálogo PDF</a></li>
            <li><a href="#">Galeria Especial</a></li>
            <li><a href="#">Descontos para membros</a></li>
        </ul>
        <form method="post" action="login.php">
            <button type="submit">Terminar Sessão</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Roupa Desportiva</p>
    </footer>
</body>
</html>