<?php
$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

//método sem criptografar e sem segurança, foi testado e deu ok//
$sqlselectNoticias = "SELECT
idnoticia,
useremail,
nottitulo,
notsubtitulo,
notdatacriado,
nottexto,
notdataeditado,
notimagem 
FROM noticias";
$noticias = $db->query($sqlselectNoticias)->fetchAll(PDO::FETCH_ASSOC);
//var_dump($user);

?>