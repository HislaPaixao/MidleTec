<?php

session_start();
if (!isset($_POST["senha"]) || empty($_POST["senha"])) {
//    echo "Usuário e/ou senha inválidos";

header("location:login.php?msg=senha não informada");
    exit;}
require_once "../src/dao/usuariodao.php";




$matricula = $_POST["matricula"];
$senha = MD5($_POST["senha"]);
$AlunoDAO = new AlunoDAO();
$AlunoLogin = $AlunoDAO->login($matricula, $senha);


if (!empty($AlunoLogin)) {

    $_SESSION["idusuario"] = $AlunoLogin["idusuario"];
    $_SESSION["email"] = $AlunoLogin["email"];
    $_SESSION["senha"] = $AlunoLogin["senha"];
    $_SESSION["nome"] = $AlunoLogin["nome"];
    $_SESSION["sobrenome"] = $AlunoLogin["sobrenome"];
    $_SESSION["matricula"] = $AlunoLogin["matricula"];
    $_SESSION["instituicao"] = $AlunoLogin["instituicao"];
    $_SESSION["imagem"] = $AlunoLogin["imagem"];


    // $_SESSION["genero"] = $AlunoLogin["genero"];


  
    header("location:../material/index.php");
    exit;
    
} else {
    //  header("location:login.php?msg=não foi possiel efetuar o ligin Verifique Aluno e Senha.");
    echo ("não foi possiel efetuar o ligin<br>Verifique Aluno e Senha.<br><a href='login.php'>Voltar</a>");
    //   var_dump($AlunoLogin, $AlunoDAO, $matricula);
      print '<br>';
     print_r($AlunoDAO, );
      print_r( $AlunoLogin );
    exit;
}
 

?>