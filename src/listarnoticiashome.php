<?php
require_once 'parametros.php';


try {

    $db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

    $selectNoticias = "SELECT
                        idnoticia,
                        useremail,
                        nottitulo,
                        notsubtitulo,
                        notdatacriado,
                        date_format(notdatacriado, '%m/%d/%Y') as notdatacriadoformated,
                        nottexto,
                        notdataeditado,
                        notimagem 
                    FROM noticias
                    order by notdatacriado desc
                    limit 3";
//$noticias = $db->query($selectNoticias)->fetchAll(PDO::FETCH_ASSOC);
$noticias = $db->query($selectNoticias)->fetchAll();
//var_dump($noticias);

}  catch (Exception $e) {
    $html = '<p style="m-2"> Não foi possível carregar as notícias.</p>';
}

?>