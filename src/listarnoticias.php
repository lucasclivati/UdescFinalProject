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
//var_dump($noticias);

if(!$noticias) {
    throw new Exception('Não foi possível carregar as notícias');
}



$html = '
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">'. $noticias[0]['nottitulo'] . '</h3>
                        <div class="mb-1 text-muted">'. $noticias[0]['notdatacriado'] . '</div>
                        <p class="card-text mb-auto">'. $noticias[0]['notsubtitulo'] . '</p>
                        <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia='. $noticias[0]['idnoticia'] . '" class="stretched-link">Ver notícia.</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="/files/notimgs/'.$noticias[0]['notimagem'].'" alt="Imagem">
                    </div>
                </div>
            </div>
            ';

}  catch (Exception $e) {
    $html = '<p style="m-2"> Não foi possível carregar as notícias.</p>';
}

echo $html;



?>