<?php
session_start();

if (isset($_SESSION["idusuario"])) {
    // print_r($_SESSION);
    $Alunonome = $_SESSION['nome'];

    $idAluno = $_SESSION['idusuario'];
    $foto = '../' . $_SESSION['imagem'];
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
    <script src="../assets/js/menu.js" defer></script>


    <title>MidleTech</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['idusuario'])) {
        header('location:../index.php');
    }
    ?>
    <header class="header_menu">
        <div class="div_menu">
            <a href="../index.php" class="logo">
                <img src="../assets/img/logo.png" alt="Bem vindo ao portal do aluno MidleTech" class="logo_img" title="Bem vindo ao portal do aluno MidleTech">
                </img>
            </a>

            <nav class="nav_menu">
                <ul>
                    <div class="dropdown" data-dropdown>
                        <button class="link" data-dropdown-button><?php echo $Alunonome; ?> <img class="fotoPerfil" src="<?php echo $foto; ?> "></button>
                        <div class="dropdown_menu">
                            <a href="../perfil/index.php">&nbsp;&nbsp;perfil</a>

                            <a href="../login/logout.php">&nbsp;&nbsp;sair</a>
                        </div>
                    </div>
                </ul>

            </nav>
        </div>
    </header>

    <main>

        <div class="main_opc">
            <section class="main_material">
                <div class="main_material_content">
                    <header class="main_blog_header">
                        <h1 class="icon-blog">BIBLIOTECA</h1>
                        <p>Encontre e compartilhe materiais com nossa comunidade!</p>
                    </header>
                    <header class="main_course_header"></header>
                    <div class="alinhamento">
                        <article>
                            <h2>Artigos</h2>
                            <header>
                                <p align="center">
                                    <a href="artigos.php">
                                        <img src="../assets/img/artigos.svg" alt="Artigos" title="Artigos" width="300" height="300">
                                    </a>
                                </p>
                            </header>
                        </article>

                        <article>
                            <h2>Vídeos</h2>
                            <header>
                                <p align="center">
                                    <a href="videos.php">
                                        <img src="../assets/img/videos.svg" alt="Vídeos" title="Vídeos" width="300" height="300">
                                    </a>
                                </p>
                            </header>
                        </article>
                        <article>
                            <h2>Links</h2>
                            <header>
                                <p align="center">
                                    <a href="links.php">
                                        <img src="../assets/img/links.svg" alt="Links" title="Links" width="300" height="300">
                                    </a>
                                </p>
                            </header>
                        </article>


                    </div>

                </div>
                <div class="main_forum_content">
                    <header class="main_blog_header">
                        <h1 class="icon-blog">Encontre Fóruns de Discussão</h1>
                        <p>Aqui você encontra fóruns de discussão de diferentes temas que podem ser do seu interesse.</p>
                    </header>

                    <article>
                        <a href="#">
                            <img src="../assets/img/tecnologia.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Tecnologia e Gadgets</a></p>
                        <h2><a href="" class="title">Discussões osbre as últimas tendências em tecnologia, gadgets e software. Resolução de problemas técnicos. Avaliação de produtos Eletrônicos.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/saude.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Saúde e Bem-Estar</a></p>
                        <h2><a href="" class="title">Tópicos relacionados à saúde e bem-estar, incluindo exercícios, dietas saudáveis, e gerenciamento do estresse. Buscando promover um estilo de vida saudável e equilibrado.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/art.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Arte e Cultura</a></p>
                        <h2><a href="" class="title"> Espaço dedicado à apreciação crítica de obras de arte, filmes, música e literatura. Incentivando o compartilhamento de projetos de arte e fomentando a criação colaborativa entre nossos membros. Promoção de debates animados sobre cultura pop e as tendências mais recentes.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/fisica.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Física e Matemática</a></p>
                        <h2><a href="" class="title">Debates estimulantes sobre teorias, fórmulas e problemas matemáticos, assim como discutir os princípios fundamentais da física.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/aprendizado.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Educação e Aprendizado</a></p>
                        <h2><a href="" class="title">Promove debates sobre métodos de estudo eficazes para melhorar o desempenho acadêmico. Apoio a estudantes que enfrentam dificuldades em suas jornadas educacionais.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/viagem.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Viagens e Aventura</a></p>
                        <h2><a href="" class="title">Os membros compartilham dicas de viagem, recomendam destinos e compartilham relatos de suas experiências. Planejamento de viagens em grupo para que você possa explorar o mundo com outros entusiastas de viagens.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/carreira.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Carreiras e Emprego</a></p>
                        <h2><a href="" class="title"> Recurso para orientação de carreira e desenvolvimento profissional. Aqui, você encontrará ofertas de emprego e oportunidades de freelancers para impulsionar sua trajetória profissional. Promove discussões sobre entrevistas, técnicas de networking e estratégias para avançar em sua carreira.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/politica.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Política e Ativismo</a></p>
                        <h2><a href="" class="title">Os membros participam de debates envolventes sobre questões políticas locais e globais, colaboram na organização de eventos e campanhas de conscientização e exploram debates éticos e morais.</a></h2>
                    </article>
                    <article>
                        <a href="#">
                            <img src="../assets/img/culinaria.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Alimentação e Culinária</a></p>
                        <h2><a href="" class="title">Compartilhamento de receitas deliciosas e técnicas de cozinha. Avaliações de restaurantes e pratos, ajuda para escolher os melhores locais para suas refeições fora de casa. Incentiva discussões sobre dietas especiais, como vegetarianismo e paleo, para ajudá-lo a encontrar opções que atendam às suas preferências alimentares.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/games.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Jogos e Entretenimento</a></p>
                        <h2><a href="" class="title">Conversas animadas sobre seus jogos favoritos, ler análises detalhadas e ficar por dentro dos torneios mais recentes. Comunidades de fãs de filmes, séries e livros para aqueles que desejam compartilhar e discutir sobre.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/sustentabilidade.svg" width="200" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Sustentabilidade e Meio Ambiente</a></p>
                        <h2><a href="" class="title">Debates sobre práticas sustentáveis e a redução de resíduos, ficar atualizado com notícias ambientais e descobrir projetos comunitários de conservação.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/familia.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Parentalidade e Família</a></p>
                        <h2><a href="" class="title">Espaço acolhedor para pais e mães com compartilhamento de dicas valiosas para a jornada da parentalidade. Apoio dedicado a famílias com crianças com necessidades especiais. Também promove discussões significativas sobre gravidez e parto.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/desenvolvimento.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Desenvolvimento Pessoal</a></p>
                        <h2><a href="" class="title">Técnicas de autoajuda, histórias inspiradoras de superação e grupos de apoio para lidar com desafios pessoais.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/games2.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Desenvolvimento de Jogos</a></p>
                        <h2><a href="" class="title">Discussões sobre seus projetos, onde pode receber feedback valioso. Espaço para o compartilhamento de recursos e tutoriais que ajudarão a impulsionar seu desenvolvimento de jogos, aprimore suas habilidades de desenvolvimento.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/historia.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">História e Genealogia</a></p>
                        <h2><a href="" class="title">Discussões envolventes sobre eventos históricos e genealogia familiar. Oferece ajuda e orientação para pesquisas de árvores genealógicas e registros históricos.</a></h2>
                    </article>

                    <article>
                        <a href="#">
                            <img src="../assets/img/ciencia.svg" width="" alt="Imagem post" title="Imagem Post" width="350" height="200">
                        </a>
                        <p><a href="" class="category">Ciência e Tecnologia Futurista</a></p>
                        <h2><a href="" class="title">Conversas estimulantes sobre avanços científicos e tecnológicos futuros. Especulações envolventes sobre o destino da humanidade e o papel da tecnologia nesse cenário.</a></h2>
                    </article>
                </div>
            </section>
        </div>
    </main>

</body>