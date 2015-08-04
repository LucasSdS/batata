<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>AG¡T EM …LE</title>
</head>
<body>
<!-- Isto È um coment·rio, nada disso
ir· aparecer no site. -->
<header>
    <nav>
        <p><sub>Este È um</sub> menu <sup>simples.</sup></p>
        <ul>
            <li><a href="<?php echo url('/'); ?>">HOME</a></li>
            <li><a href="<?php echo url('admin'); ?>">AREA ADM</a></li>
            <li><a href="<?php echo url('contato'); ?>"><img src = "images/fone.png" title = "Contato" >CONTATO</a></li>
        </ul>
        <ol>
            <li><strong>HO</strong>ME</li>
            <li>AREA ADM</li>
            <li>CONTATO</li>
        </ol>
    </nav>
</header>
<hr>
<br><br>

<section>
    <p> Legal, me envie seus dados que vou te responder.</p>
    <form action="" method="get">
        <label for="login">Username</label>
        <input type="text" name="login" id="login">

        <label for="senha" >Senha</label>
        <input type="password" name="senha" id="senha">
        <br><br>

        <label for="sexoM">Sexo</label>
        <input type="radio" name="sexo" id="sexoM"> M <br>
        <input type="radio" name="sexo" id="sexoF"> F


        <select name="estado" id="estado">
            <option value="...">...</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">S„o Paulo</option>
        </select>

        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">

        <form action="http://google.com/search" method="get" target="_blank">
            <input type="text" name="q">
            <input type="submit" value="Search">
        </form>


    </form>
</section>
</body>
</html>