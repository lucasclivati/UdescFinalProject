<?php
//essa pagina vai ser chamada via post pelo form da página adicionarnoticias.php

//verificando se os dados do formulário foram recebidos, do contrário, vazio
$nottitulo = isset($_POST['nottitulo']) ? $_POST['nottitulo'] : '';
$notsubtitulo = isset($_POST['notsubtitulo']) ? $_POST['notsubtitulo'] : '';
$nottexto = isset($_POST['nottexto']) ? $_POST['nottexto'] : '';
$notimagem = isset($_POST['notimagem']) ? $_POST['notimagem'] : '';

//definindo a variável upload através da superglobal files
$upload = $_FILES['notimagem'];

//definição do tamanho máximo do arquivo de imagem
$tamanhoMaximo = 52428800; // 50mb
//definindo o local em que o arquivo definitivo será salvo
$arquivoDefinitivo = 'files/imgs/' . $upload['name'];
//validação se o tipo do arquivo qualquer tipo de imagem, se for verdadeiro, a variável $tipoValido será true
if($upload['type'] == "image/gif" or $upload['type'] == "image/GIF" or $upload['type'] == "image/png" or $upload['type'] == "image/PNG" or $upload['type'] == "image/jpeg" or $upload['type'] == "image/JPEG" or $upload['type'] == "image/jpg" or $upload['type'] == "image/JPG"  or $upload['type'] == "image/WEBP" or $upload['type'] == "image/webp") {
    $tipoValido = true;
} else {
    $tipoValido = false;
}
//variável para verificar se o tamanho não excedeu o limite definito no tamanho máximo
$tamanhoValido = $upload['size'] <= $tamanhoMaximo ? true : false;

//verifica se o tamanho e tipo estão dentro das condições anteriore
if ($tamanhoValido && $tipoValido) {
    if(move_uploaded_file($upload['tmp_name'], $arquivoDefinitivo)){
            session_start();
            require_once 'src/parametros.php';
            
            $db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

            $sqlInsertNoticia = "INSERT INTO noticias
                    (nottitulo, notsubtitulo, nottexto, useremail, notdatacriado, notimagem)
                    VALUES 
                    ('{$nottitulo}','{$notsubtitulo}','{$nottexto}','{$_SESSION['login']['useremail']}',CURDATE(),'{$upload['name']}')";
                    $noticia = $db->query($sqlInsertNoticia)->fetchAll();
                    header('Location:adicionarnoticias.php?sucess=1');
    } else {
        header('Location:adicionarnoticias.php?error=arquivoinvalido1');
    }

} else {
    header('Location:adicionarnoticias.php?error=arquivoinvalido2');
}
//var_dump($_SESSION['login']);
//var_dump($nottitulo, $notsubtitulo, $nottexto);
//var_dump($noticia);
?>