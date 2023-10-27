<?php
require_once '../src/database/conexao.php';
require_once '../src/DTO/UsuarioDTO.php';


$usuarioDTO = new UsuarioDTO(); 
$dbh = Conexao::getConexao();

    $nome = strtoupper(trim($_POST['nome']));
    // $sobrenome = strtoupper(trim($_POST['sobrenome']));
    $senha =md5($_POST['senha']);
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    // $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $dtnasc = $_POST['dtnasc'];
    // $genero = $_POST['genero'];
    // $foto = $_POST['foto'];
    // $cep = $_POST['cep'];
    // $estado = $_POST['estado'];
    // $cidade = $_POST['cidade'];
    $instituicao = $_POST['instituicao'];
    // $ = strtoupper($_POST['']);
    // $ = strtoupper($_POST['']);
    $perfil="usuariocomun";
    $status="1";
    if ( isset( $_FILES['imagem']['name'] ) AND !empty( $_FILES['imagem']['name'] ) ) {
        $img_name = $_FILES['imagem']['name'];
        $tmp_name = $_FILES['imagem']['tmp_name'];
        $error    = $_FILES['imagem']['error'];
        
        if ( $error == 0 ) {
            $img_ex       = pathinfo( $img_name, PATHINFO_EXTENSION );
            $img_ex_to_lc = strtolower( $img_ex );
            
            $allowed_exs = array( 'jpg', 'jpeg', 'png', 'jfif' );
            if ( in_array( $img_ex_to_lc, $allowed_exs ) ) {
                
                mkdir("../upload/".$nome);
                $new_img_name          = uniqid( $matricula, true ) . '.' . $img_ex_to_lc;
                $img_upload_path       = '../upload/'. $nome .'/'.  $new_img_name;
                $img_upload_path_banco = 'upload/' .$nome .'/'.  $new_img_name;
                move_uploaded_file( $tmp_name, $img_upload_path );
                $usuarioDTO->setImagem( $img_upload_path_banco );
            }
        }
    }
    
    $query = "INSERT INTO midletech.usuarios (nome,  senha, email, matricula,  telefone, dtnasc, instituicao, perfil, status, imagem)  
                                     VALUES ( :nome,   :senha, :email, :matricula,  :telefone, :dtnasc, :instituicao, :perfil, :status, :imagem);";

$statement = $dbh->prepare($query);
$statement->bindParam(':nome',$nome);
$statement->bindParam(':senha',$senha);
$statement->bindParam(':email',$email);
$statement->bindParam(':matricula',$matricula);
// $statement->bindParam(':ddd',$ddd);
$statement->bindParam(':telefone',$telefone);
$statement->bindParam(':dtnasc',$dtnasc);
// $statement->bindParam(':genero',$genero);
$statement->bindParam(':imagem',$imagem);
// $statement->bindParam(':cep',$cep);
// $statement->bindParam(':estado',$estado);
// $statement->bindParam(':cidade',$cidade);
$statement->bindParam(':instituicao',$instituicao);
$statement->bindParam(':perfil',$perfil);
$statement->bindParam(':status',$status);
// $statement->bindParam(':sobrenome',$sobrenome);
$statement->bindValue(":imagem", $usuarioDTO->getImagem());



    $result = $statement->execute();

    if ($result) {
        echo '<script>alert("Usuário inserido com sucesso.");</script>';
    } else {
        echo 'Não foi fossível inserir usuário';

        $error = $dbh->errorInfo();
        print_r($error);
    }



$dbh = null;