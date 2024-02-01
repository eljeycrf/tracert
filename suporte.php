<?php
session_start();
require_once('conn.php');
error_reporting(0);
ini_set("display_errors", 0 );

if($_SESSION['username'] == True){
    $user = $_SESSION['username'];
    $busca_user= "SELECT * FROM usuarios WHERE user = '$user'";
    $sql =  mysqli_query($conn, $busca_user);
    while ($dados_usuario = mysqli_fetch_array($sql)){
        $tipo_cliente = $dados_usuario['tipo'];
        }
    }else{
    echo "<script>
    window.location.href = './index.html';
    </script>";
    }
?>
      

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title> Tracert - Sua visão, nossa tecnologia.</title>
    </head>
    <body>
        <header>
            <a href="./index.html" id="logo"><img class="img" src="img/TRACERT.png" alt="Logo tracert"></a>
            <button id="openMenu">&#9776;</button>
            <nav id="menu">
                <button id="closeMenu">X</button>
                <div class="links_menu">
                    <a href="./botwhats.php">BOT Whatsapp</a>
                    <a href="./suporte.php">Chamados</a>
                    <a href="./profile.php">Seu Perfil</a>
                    <?php
                    if($tipo_cliente == 1){
                        echo "<a href='./admin.php'>Admin</a>";
                    }
                    ?>
                    <a href="./sair.php">Sair</a>
                 </div>
                <div class="searchbox">
                    <input class="search-txt" type="text" name="txtsearch" placeholder="Buscar">
                    <a class="search-btn" href="#">
                        <img class="search-btn" src="./img/lupa.png" alt="Lupa de pesquisa">
                    </a>
                </div>
                <div class="lang">
                    <a href="./index.html"><img class="bnd" src="./img/br.png" alt="bandeira do brasil"></a>
                    <a href="./index.html"><img class="bnd" src="./img/eua.png" alt="bandeira dos estados unidos"></a>
                </div>         
            </nav>
        </header>
        <main><h1>>PAGINA DE SUPORTE AO CLIENTE</h1></main>
        <aside>Aside</aside>
        <footer>
            <a href="#">Sobre</a>
            <a href="#">Endereço</a>
            <a href="#">Informações</a>
            <a href="#">Contato</a>
            <a href="#">Redes Sociais</a>
            <a href="#">Endereço</a>
        </footer>
        <script type="text/javascript" src="./js/script.js"></script>
    </body> 
</html>
