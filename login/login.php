<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/boot.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">

    <title>login</title>
</head>

<body>
    <header class="header_menu">
        <div class="div_menu">

            <a href="../index.php" class="logo"><img src="../assets/img/logo.png" alt="logo" class="logo_img"></a>
            <div class="spacer"></div>
            <nav class="nav_menu">

            </nav>
        </div>
    </header>

    <main class="login">

        <div class="main_login">
            <div class="main_login_content">
                <div class="main_login_form">

                    <form action="../index.php" method="POST">
                        <div class="main_login_cabeçalho">
                            <h1>Login</h1>
                        </div>
                        <div class="main_login_input">
                            <input type="text" name="matricula" placeholder="Aluno" class="size">
                            <input type="password" name="senha" placeholder="Senha" class="size">
                        </div>
                        <button type="submit"><b>Entrar</b></button>
                        <p class="ali-rig"><a href="#" class="senha">Recuperar Senha</a></p>
                        <p class="ali-rig"><a href="../usuário/index.php" class="senha">Não possuo cadastro</a></p>
                    </form>
                    

                </div>

                <div class="main_login_img">
                    <img src="../assets/img/login.svg" alt="">
                </div>
            </div>
        </div>
    </main>

</body>

</html>