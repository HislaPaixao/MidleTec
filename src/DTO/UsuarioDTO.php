<?php
class UsuarioDTO
{
private $imagem;


function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    function getImagem()
    {
        return $this->imagem;
    }

}