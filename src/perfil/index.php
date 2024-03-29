<?php
session_start();
$idusuario = $_SESSION['idusuario'];
require_once '../src/dao/usuariodao.php';

if (isset($_SESSION["idusuario"])) {
    // print_r($_SESSION);
    $dao = new AlunoDAO();
    $usuario = $dao->getUsuarios($idusuario);

    $idAluno = $usuario['idusuario'];
    $foto = '../' . $usuario['imagem'];
}
// var_dump($foto)
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/boot.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
    <link rel="stylesheet" href="../assets/css/style_options.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <script src="../assets/js/menu.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <title>Meu Perfil</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['idusuario'])) {
        header('location:../index.php');
    }
    ?>
    <header class="header_menu">
        <div class="div_menu">
            <a href="index.php" class="logo">
                <img src="../assets/img/logo.png" alt="Bem vindo ao portal do aluno MidleTech" class="logo_img" title="Bem vindo ao portal do aluno MidleTech">
            </a>

            <nav class="nav_menu">
                <ul>

                    <div class="dropdown" data-dropdown>
                        <button class="link" data-dropdown-button><?php echo $usuario['nome']; ?><div class="fotoPerfil"><img  src="<?php echo $foto; ?> "></div></button>
                        <div class="dropdown_menu">
                            <a href="../perfil/index.php">&nbsp;&nbsp;Perfil</a>
                            <a href="../material/materialusuario.php">&nbsp;&nbsp;Meus Materiais</a>
                            <a href="../perfil/foruns.php">&nbsp;&nbsp;Meus Foruns</a>
                            <a href="../login/logout.php">&nbsp;&nbsp;Sair</a>
                        </div>
                    </div>
                </ul>
                <ul>
                    <li><a href="../material/index.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <?php
if(isset($_GET['error']) || isset($_GET['msg']) ) { ?>
            <script>
                Swal.fire({
                icon: '<?php echo (isset($_GET['error']) ? 'error' : 'msg');?>',
                title: 'Perfil',
                text: '<?php echo (isset($_GET['error']) ? $_GET['error']: $_GET['msg']); ?>',
                })
            </script>
        <?php } ?>

    <main>

        <div class="main_opc">
            <section class="main_material">
                <div class="main_material_content">

                    <header class="main_course_header"></header>
                    <div class="alinhamento">
                        <article>
                            <h2>Meus Dados</h2>
                            <header>
                                <p align="center">
                                    <a href="listar.php">
                                        <img src="../assets/img/alterar.svg" alt="Meus Dados" title="Meus Dados" width="300" height="300">
                                    </a>
                                </p>
                            </header>
                        </article>

                        <article>
                            <h2>Meus Favoritos</h2>
                            <header>
                                <p align="center">
                                    <a href="favoritos.php">
                                        <img src="../assets/img/favoritos.svg" alt="Meus Favoritos" title="Meus Favoritos" width="300" height="300">
                                    </a>
                                </p>
                            </header>
                        </article>

                    </div>

                </div>
</body>


</html>