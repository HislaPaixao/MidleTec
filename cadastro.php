<?php 
require_once 'src/conexao.php';
$dbh = conexao::getConexao();

$query = "SELECT * FROM midletech.instituicoes;";

$statement = $dbh->query($query);

$escola = $statement->rowCount();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/cadastrocss.css">
    <title>MidleTech Sing-in</title>
</head>
<!-- ab -->
<body>
    <?php include_once "nav.html"; ?>


    <h1>Cadastro</h1>
    <fieldset>
        <legend>Dados do Aluno</legend>
        <form action="CadastroADD.php" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" placeholder="Nome" maxlength="50" required class="input_nome">
            <input type="text" name="sobrenome" placeholder="Sobrenome" required maxLength="50" class="input_nome"> 
            <br>
            <label for="senha">Senha*</label>
            <input type="password" name="senha" minlength="6" maxlength="50" placeholder="Crie uma Senha" required>
            <br>
            <label for="email">E-mail*</label>
            <input type="email" name="email" placeholder="Informe seu E-mail" required>
            <br>
            <label for="matricula">Matricula*</label>
            <input type="number" name="matricula" placeholder="Informe Seu Numero de Matricula"  required>
         <!-- a matricula consiste em 9 numeros. não é possivel usar maxLength e minlength em input type="number".-->
  <br>
         <label for="'telefone', 'ddd'">Telefone</label>
            <input class="ddd" type="tel" name="ddd" minlength="2" maxlength="2" placeholder="DDD" required>
            <input type="tel" name="telefone" minlength="9"   maxlength="9" placeholder="Informe Seu Numero de Telefone" required>
            <br>
            <label for="dtnasc">Data de nascimento*</label>
            <input type="date" name="dtnasc" required>
            <br>
            <label for="genero">Genêro</label>
            <input type="radio" name="genero" value="M">Masculino
            <input type="radio" name="genero" value="F">Feminino
            <input type="radio" name="genero" checked value="naoinformado">Prefiro não informar
            <!-- <br> -->
            <!-- <label for="foto">Foto</label> -->
            <!-- <input type="file" name="foto"> -->

            <br>
            <label for="cep">CEP*</label>
            <input type="number" name="cep" placeholder="Informe seu CEP" required maxlength="8" minlength="8" >
            <br>
            <label for="estado">Estado*</label>
            <input type="text" name="estado" placeholder="Informe o estado" required>
            <br>
            <label for="cidade">Cidade*</label>
            <input type="text" name="cidade" placeholder="Informe a cidade" required>
            <br>

            <label for="instituicao">instituição*</label>
            <select name="instituicao">
                <?php if ($escola == "0") :?>
                <option value="none">none</option>
                <?php else:  ?>
                <?php while ($row = $statement->fetch()): ?>
                <option value="<?= $row['1']; ?>"><?= $row['1']; ?></option>
                <?php endwhile; ?>
                    <?php endif; ?>
                    <?php $dbh=null ?>
                <!-- <option value="ETBRAZ">Escola Técnica Deputado Juarezão</option>
                <option value="Maria Regina Velanes Regis">Centro Educacional Irmã Maria Regina Velanes Regis</option>
                <option value="ETC">Escola Técnica de Ceilândia</option>
                <option value="CEPAG">Centro de Educação Profissional Articulado do Guará Teresa Ondina Maltese</option>
                <option value="CEP ETP">Escola Técnica de Planaltina</option>
                <option value="Stella dos Cherubins Guimaraes Trois">Centro Educacional Stella dos Cherubins Guimarães
                    Trois</option>
                <option value="Centro de Educacao de Jovens e Adultos da Asa Sul">Centro de Educação de Jovens e Adultos
                    da Asa Sul</option>
                <option value="EMB">Escola de Música de Brasília</option>
                <option value="Centro de Ensino Medio Integrado do Cruzeiro">Centro de Ensino Médio Integrado do
                    Cruzeiro</option>
                <option value="Centro Educacional 02 do Cruzeiro">Centro Educacional 02 do Cruzeiro</option>
                <option value="Escola de Sabores">Centro de Educação Profissional - Escola de Sabores</option>
                <option value="Escola Tecnica de Santa Maria">Escola Técnica de Santa Maria</option>
                <option value="Escola Tecnica de Brasilia">Escola Técnica de Brasília</option>
                <option value="Centro de Ensino Medio Integrado de Taguatinga">Centro de Ensino Médio Integrado de
                    Taguatinga</option> -->
            </select>

            <button type="submit">Enviar</button>
        </form>
    </fieldset>
</body>

</html>