<?php
require_once 'src/parametros.php';
$idnoticia = isset($_GET['idnoticia']) ? $_GET['idnoticia'] : header('Location:noticias.php?noticiainvalida');

/*

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

$selectNoticiasById = "SELECT
                        idnoticia,
                        useremail,
                        nottitulo,
                        notsubtitulo,
                        notdatacriado,
                        nottexto,
                        notdataeditado,
                        notimagem 
                    FROM noticias
                    where idnoticia = $GET";
$noticias = $db->query($selectNoticiasById)->fetchAll(PDO::FETCH_ASSOC);
//$noticias = $db->query($selectNoticias)->fetchAll();
//var_dump($noticias);
?>