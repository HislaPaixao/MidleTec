<?php
session_start();

if (isset($_SESSION["idusuario"])) {
header('location:material/index.php');
}else

//exit;  
// } else {
//     header('location:login.php');
// }
//  require_once '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
</head>



<body>


    <header class="header_menu">
        <div class="div_menu">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="Bem vindo ao portal do aluno MidleTech" class="logo_img" title="Bem vindo ao portal do aluno MidleTech">
            </a>
            <nav class="nav_menu">
                <ul>
                    <li><a href="#ancora">Contato</a></li>
                    <li><a href="material/material.php">Material</a></li>
                    <li><a href="instituição/instituicao.php">Instituição</a></li>
                    <li><a href="login/login.php">Login</a></li>
                </ul>
                
            </nav>
        </div>
    </header>

    <!--INICIO CAPA-->
    <main>

        <body>
            <div class="formato_capa">
                <div class="capa">
                    <div class="box">
                        <div class="box_content">
                            <img src="assets/img/capa.svg" alt="capa" width="750" height="500">
                        </div>
                    </div>

                    <div class="box2">
                        <h1>BEM-VINDO</h1>
                        <p>Em nossa plataforma de aprendizado você encontrará as ferramentas e recursos necessários para expandir seus horizontes e alcançar seus objetivos educacionais.</p>
                        <p><a href="usuario/index.php" class="btn">Cadastrar</a></p>
                    </div>
                </div>
            </div>


            <!--FIM CAPA-->

            <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
            <section class="main_blog">
                <header class="main_blog_header">
                    <h1 class="icon-blog">Nosso Últimos Artigos</h1>
                    <p>Aqui você encontra as últimas notícias sobre as Escolas Técnicas.</p>
                </header>

                <article>
                    <a href="#">
                        <img src="assets/img/post7.svg" width="200" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post3.svg" width="200" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post1.svg" width="200" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post4.svg" width="" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post5.svg" width="" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post6.svg" width="" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post2.svg" width="" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>

                <article>
                    <a href="#">
                        <img src="assets/img/post8.svg" width="" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
                </article>
            </section>
            <!--FIM SESSÃO SESSÃO DE ARTIGOS-->


            <!-- INICIO SESSÃO DOBRA  CURSOS-->
            <section class="main_course">
                <header class="main_course_header">
                    <img src="assets/img/ofertas.svg" alt="img" title="img">
                    <h1 class="icon-books">O que nossas escolas oferecem?</h1>
                </header>
                <div class="main_course_content">
                    <article>
                        <header>
                            <h2>Novo Ensino Médio</h2>
                            <p>A oferta de EPT foi ampliada para atender estudantes de todas as unidades escolares de Ensino Médio, em todas as Coordenações Regionais de Ensino </p>
                        </header>
                    </article>
                    <article>
                        <header>
                            <h2>Diferentes formas de oferta</h2>
                            <p>As modalidades de oferta incluem a subsequente, a articulada ao Ensino Médio, a integrada e a concomitante</p>
                        </header>
                    </article>
                    <article>
                        <header>
                            <h2>Certificação</h2>
                            <p>Escolas oferecem certificações através de programas de ensino e avaliação, garantindo a qualificação dos estudantes</p>
                        </header>
                    </article>
                    <article>
                        <header>
                            <h2>Presencial e à distância</h2>
                            <p>Os cursos podem ser realizados à distância ou presencialmente, a depender da forma de oferta de cada uma das unidades escolares de Educação Profissional e Tecnológica</p>
                        </header>
                    </article>
                </div>
                <!-- FIM SESSÃO DOBRA  CURSOS-->

                <!--INICIO DOBRA REVIEWS-->
                <div class="main_course_fullwidth" id="ancora">
                    <div class="main_course_ratting_content">
                        <article class="main_course_rating_title">
                            <header>
                                <h2>Avaliações de alunos que já passaram por nossas instituições</h2>
                            </header>
                            <img src="assets/img/avaliações.svg" alt="Estrela" title="Estrela">
                        </article>

                        <section class="main_course_ratting_content_comment">
                            <header>
                                <h2>Veja as avaliações mais recentes</h2>
                            </header>
                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>

                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>

                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>

                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>

                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>

                            <article>
                                <header>
                                    <h3> Instrutor Web</h3>
                                    <p>03/03/2023</p>
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                    <img src="assets/img/star.png" alt="Imagem" title="Imagem">
                                </header>
                                <p>O conteúdo é fantático, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                    minhas
                                    páginas em html5 e Css3</p>
                            </article>
                        </section>
                    </div>
                </div>

                <!--FIM DOBRA REVIEWS-->

                <!-- INICIO DOBRA TUTOR -->
                <section class="main_tutor">
                    <div class="main_tutor_content">
                        <header>
                            <h1>Quer acesso a plataforma mas não é um aluno de nossas unidades?</h1>
                            <p>Faça sua assinatura!</p>
                        </header>
                        <div class="main_tutor_content_img">
                            <img src="assets/img/instrutor.svg" width="200" title="Instrutor" alt="Instrutor">
                        </div>
                        <article class="main_tutor_content_history">
                            <header>
                                <h2>Tenha acesso à biblioteca e fóruns de discussão</h2>
                            </header>
                            <p>Quer levar sua jornada acadêmica para o próximo nível? Com nossa assinatura premium, você terá acesso exclusivo a uma vasta biblioteca de materiais didáticos de alta qualidade e fóruns de discussão acadêmica, criando um ambiente de aprendizado colaborativo e enriquecedor.
                            </p>
                        </article>

                        <section class="main_optin_footer">
                            <div class="main_optin_footer_content">
                                <header>
                                    <h1>Desbloqueie seu potencial acadêmico com nossa assinatura premium hoje!</h1>
                                </header>
                                <article>
                                    <header>
                                        <h2><a href="#" class="btn">Fazer Assinatura</a></h2>
                                    </header>
                                </article>
                            </div>
                        </section>

                    </div>
                </section>
                <!--FIM DOBRA TUTOR-->

                <section class="main_footer">
                    <header >
                        <h1>Quer saber mais?</h1>
                    </header>

                    <article class="main_footer_our_pages" >
                        <header>
                            <h2>Nossas Páginas</h2>
                        </header>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">A Escola</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </article>

                    <article class="main_footer_links">
                        <header>
                            <h2>Links Úteis</h2>
                        </header>
                        <ul>
                            <li><a href="#">Política de Privacidade</a></li>
                            <li><a href="#">Aviso Legal</a></li>
                            <li><a href="#">Termos de Uso</a></li>
                        </ul>
                    </article>

                    <article class="main_footer_about">
                        <header>
                            <h2>Sobre o Projeto</h2>
                        </header>
                        <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam dentro
                            dos padrões da WEB seguindo as boas práticas</p>
                    </article>
                </section>
                <footer class="main_footer_rights" >
                    <p>ETC - Todos os direitos reservados.</p>
                </footer>
                <!-- FIM DOBRA RODAPÉ -->
            </section>

    </main>

</body>

</html>