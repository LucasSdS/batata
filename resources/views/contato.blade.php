<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bom Lugar Viagens - Contato</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="<?php echo url('/'); ?>">PÁGINA INICIAL</a></li>
            <li><a href="<?php echo url('viagens'); ?>">VIAGENS</a></li>
            <li><a href="<?php echo url('quemsomos'); ?>">QUEM SOMOS</a></li>
            <li><a href="<?php echo url('contato'); ?>">CONTATO</a></li>
            <li><a href="<?php echo url('admin'); ?>">ADMIN</a></li>
        </ul>
    </nav>
</header>
<hr>
<br>

<section>
    <form action = "" method = "get" name="1">

        <label for = "nome">Nome</label>
        <input type = "text" name = "nome" id = "nome"><br>
        <label for = "email">Email</label>
        <input type = "email" name = "email" id = "email"><br>
        <label for = "text">Mensagem</label><br>
        <textarea rows = "10" cols = "50"></textarea><br>
        <input type = "submit" value = "Enviar">
        <input type = "reset" value = "Limpar">
    </form>
        <br>
        <br>
</section>

</body>
</html>