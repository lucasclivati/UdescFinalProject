<?php
$nottitulo = isset($_POST['nottitulo']) ? $_POST['nottitulo'] : '';
$notsubtitulo = isset($_POST['notsubtitulo']) ? $_POST['notsubtitulo'] : '';
$nottexto = isset($_POST['nottexto']) ? $_POST['nottexto'] : '';
$notimagem = isset($_POST['notimagem']) ? $_POST['notimagem'] : '';

$upload = $_FILES['notimagem'];
$tamanhoMaximo = 52428800; // 50mb
$arquivoDefinitivo = 'files/imgs/' . $upload['name'];
//validação se o tipo do arquivo qualquer tipo de imagem
if($upload['type'] == "image/gif" or $upload['type'] == "image/GIF" or $upload['type'] == "image/png" or $upload['type'] == "image/PNG" or $upload['type'] == "image/jpeg" or $upload['type'] == "image/JPEG" or $upload['type'] == "image/jpg" or $upload['type'] == "image/JPG"  or $upload['type'] == "image/WEBP" or $upload['type'] == "image/webp") {
    $tipoValido = true;
} else {
    $tipoValido = false;
}
$tamanhoValido = $upload['size'] <= $tamanhoMaximo ? true : false;

if ($tamanhoValido && $tipoValido) {
    if(move_uploaded_file($upload['tmp_name'], $arquivoDefinitivo)){
            session_start();
            $dadosPDO = [
                'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
                'usuario' => 'epiz_33214230',
                'senha' => '87c6vq1x'
            ];
            
            $db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

            $sqlInsertNoticia = "INSERT INTO noticias
                    (nottitulo, notsubtitulo, nottexto, useremail, notdatacriado, notimagem)
                    VALUES 
                    ('{$nottitulo}','{$notsubtitulo}','{$nottexto}','{$_SESSION['login']['useremail']}',CURDATE(),'{$upload['name']}')";
                    $noticia = $db->query($sqlInsertNoticia)->fetchAll();
                    header('Location:adicionarnoticias.php?sucess=1');
    } else {
        header('Location:adicionarnoticias.php?error=arquivoinvalido');
    }

} else {
    header('Location:adicionarnoticias.php?error=1');
}
//var_dump($_SESSION['login']);
//var_dump($nottitulo, $notsubtitulo, $nottexto);
//var_dump($noticia);
?>