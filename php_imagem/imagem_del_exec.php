<?php 

$arquivoImg = $_GET["arquivo"];


if(file_exists($arquivoImg)) { //Verifica se o arquivo existe
    
    if(! unlink($arquivoImg)) { //Exclui o arquivo
        echo 'Erro ao excluir o arquivo: ' . $arquivoImg;
    }
} else 
    echo 'Arquivo não encontrado: ' . $arquivoImg;
