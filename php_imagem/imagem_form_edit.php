<?php

//$oldImagem = "arquivos/imagem_4f19296b-51c1-d8b7-d3d6-fb526e2a372f.png";
$oldImagem = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updload de arquivos</title>
</head>
<body>
    <h2>Exemplo de formulário para Upload de arquivos</h2>

    <!-- O formulário deve definir o atributo enctype para suportar o envio de arquivos -->
    <form method="POST" action="imagem_exec.php" enctype="multipart/form-data">

        <label for="uplImagem">Selecione o arquivo:</label>
        <br>
        <input type="file" name="imagem" id="uplImagem" 
            accept="image/*" />
        <div id="imgPreview">    
            <?php if($oldImagem and file_exists($oldImagem)): ?>
                <img src="<?= $oldImagem; ?>" style="height: 50px; width: auto;" />
                
                <br>
                <span onclick="excluirImagemAJAX('<?= $oldImagem; ?>');" style="cursor: pointer;" />Excluir</form>
            <?php endif; ?>
        </div>    
            
        <!-- Atributo accept para limitar apenas arquivo de imagem -->
        <!-- Mais em: https://www.w3schools.com/tags/att_input_accept.asp -->

        <br><br>

        <input type="submit" value="Fazer upload" />
    </form>

    <!-- Script AJAX para excluir o arquivo da imagem -->
    <script>
        function excluirImagemAJAX(pathImagem) {
            if(! confirm('Confirma a exclusão da imagem?'))
                return;
            
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                const resposta = xhttp.responseText;
                if(! resposta) {
                    window.location = 'imagem_form_edit.php';
                } else {
                    alert(resposta);
                }
            }
            
            xhttp.open('GET', "imagem_del_exec.php?arquivo=" + pathImagem, true);
            xhttp.send();
        }  


    </script>
    
</body>
</html>