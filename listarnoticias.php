<?php
require_once 'src/parametros.php';

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