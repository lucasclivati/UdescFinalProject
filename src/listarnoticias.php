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
                        nottexto,
                        notdataeditado,
                        notimagem 
                    FROM noticias
                    order by notdatacriado desc";
//$noticias = $db->query($selectNoticias)->fetchAll(PDO::FETCH_ASSOC);
$noticias = $db->query($selectNoticias)->fetchAll();
var_dump($noticias);

if(!$noticias) {
    throw new Exception('Não foi possível carregar as notícias');
}

$html = '
            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">'. $noticias[0]['nottitulo'] . '</h1>
                    <p class="display-6">'.$noticia[0]['notsubtitulo'].'</p>
                    <div>
                        <span>Notícia postada por '.$noticia[0]['useremail'].' em '.$noticia[0]['notdatacriado'].'.</span> 
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-3" src="/files/notimgs/'.$noticia[0]['notimagem'].'" alt="" width="600">
                </div>
                </div>
                <hr>
                <div class="container my-5">
                    <p>
                    '.$noticia[0]['nottexto'].'
                    </p>
                </div>
                <hr>
            </div>
            <div>
                <p style="font-size: 0.85rem">
                    Imagens geradas artificialmente no Midjourney. Notícia fictícia para conclusão do curso programador Fullstack UDESC-BC.
                </p>
            </div>
            ';

}  catch (Exception $e) {
    $html = '<p style="m-2"> Não foi possível carregar a notícia.</p>';
}

echo $html;



?>