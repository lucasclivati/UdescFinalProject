<?php
$nottitulo = isset($_POST['nottitulo']) ? $_POST['nottitulo'] : '';
$notsubtitulo = isset($_POST['notsubtitulo']) ? $_POST['notsubtitulo'] : '';
$nottexto = isset($_POST['nottexto']) ? $_POST['nottexto'] : '';
session_start();

//var_dump($_SESSION['login']);
//var_dump($nottitulo, $notsubtitulo, $nottexto);

$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

//método sem criptografar e sem segurança, foi testado e deu ok//
$sqlInsertNoticia = "INSERT INTO noticias
                (nottitulo, notsubtitulo, nottexto, useremail, notdatacriado, notimagem)
                VALUES 
                ('{$nottitulo}','{$notsubtitulo}','{$nottexto}','{$_SESSION['login']['useremail']}',CURDATE(),'csgo-image.jpeg')";

$noticia = $db->query($sqlInsertNoticia)->fetchAll();
//var_dump($noticia);
header('Location:adicionarnoticias.php?sucess=1');


?>