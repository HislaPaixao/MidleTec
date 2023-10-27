<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/boot.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Adicionar Video</title>
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

                    <form action="../index.php" method="POST"  enctype="multipart/form-data">
                        <div class="main_login_cabeçalho">
                            <h1>Ficha do Material</h1>
                        </div>
                        <div class="main_login_input">
                            <input type="text" name="titulo_video" placeholder="Título" class="size">
                            <textarea name="descricao_video" placeholder="Descrição" id="" cols="30" rows="05"></textarea>
                            <input type="text" name="assunto_video" placeholder="Assunto" class="size">
                            <input type="link" name="link_video" placeholder="Insira o Link">
                            <input type="file" name="video" accept="image/png, image/jpeg" placeholder="Faça o upload">
                        </div>
                        <button type="submit"><b>Enviar</b></button>
                    </form>
                    

                </div>

                <div class="main_login_img">
                    <img src="../assets/img/senha.svg" alt="Recuperação de Senha" width="750" height="500">
                </div>
            </div>
        </div>
    </main>

</body>

</html>