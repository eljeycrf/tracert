<!DOCTYPE html>
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
                    <a href="#">Serviços</a>
                    <a href="#">Preços</a>
                    <a href="#">Clientes</a>
                    <a href="#">Quem somos</a>
                    <a href="#">Blog</a>
                    <a href="#">Contato</a>
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
        <main>
            <div class="ladoA">
                <img id=logo_login src="./img/TRACERT (1).png" alt="logo tracert">
            </div> 
            <div class="ladoB">
                <h2 class="titulo_form" id="titulo_form">Login</h2>
                <form action="./login2.php" method="post" id="formulario-login">
                    <div class="input-field">
                        <input type="text" name="username" id="username" placeholder="Digite seu usuário" required>
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
                        <div class="underline"></div>
                    </div>
                    <input type="submit" value="Login">
                </form>
                <div class="footer_form" id="footer_form">
                    <span>Não possui uma conta? <a href="#" onclick="mostrarCadastro()">Clique aqui</a></span>
                </div>
                <form action="./cadastro2.php" method="post" id="formulario-cadastro">
                    <h2 class="cadastro_titulo">Cadastre-se</h2>
                    <div class="input-cadastro">
                        <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" required>
                        <div class="underline"></div>
                    </div>
                    <div class="input-cadastro">
                        <input type="text" name="email" id="email" placeholder="Digite seu e-mail" required>
                        <div class="underline"></div>
                    </div>
                    <div class="input-cadastro">
                        <input type="text" name="username" id="username_cadastro" placeholder="Nome de usuário" required>
                        <div class="underline"></div>
                    </div>
                    <div class="input-cadastro">
                        <input type="password" name="password" id="password_cadastro" placeholder="Digite sua senha" required>
                        <div class="underline"></div>
                    </div>
                    <div class="input-cadastro">
                        <input type="password" name="password2" id="password_cadastro2" placeholder="Confirme sua senha" required>
                        <div class="underline"></div>
                    </div>
                    <input type="submit" onclick="return validarSenha()" value="Cadastre-se">
                    <div class="footer_form" id="footer_formcadastro">
                        <span>Já possui uma conta? <a href="#" onclick="mostrarLogin()">Faça Login</a></span>
                    </div>
                </form>
            </div> 
        </main>
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
