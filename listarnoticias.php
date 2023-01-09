<?php
require_once 'src/parametros.php';

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

$selectNoticias = "SELECT
idnoticia,
useremail,
nottitulo,
notsubtitulo,
notdatacriado,
nottexto,
notdataeditado,
notimagem 
FROM noticias";
$noticias = $db->query($selectNoticias)->fetchAll(PDO::FETCH_ASSOC);
//$noticias = $db->query($selectNoticias)->fetchAll();
//var_dump($noticias);
?>