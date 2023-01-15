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
                    limit 21";
//$noticias = $db->query($selectNoticias)->fetchAll(PDO::FETCH_ASSOC);
$noticias = $db->query($selectNoticias)->fetchAll();
//var_dump($noticias);


if(!$noticias) {
    throw new Exception('UHOH! Não foi possível carregas as notícias.');
}

$html = '';
foreach ($noticias as $noticia) {
    $html .= '
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">'. $noticia['nottitulo'] . '</h3>
                        <div class="mb-1 text-muted">'. $noticia['notdatacriadoformated'] . '</div>
                        <p class="card-text mb-auto">'. $noticia['notsubtitulo'] . '</p>
                        <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia='. $noticia['idnoticia'] . '" class="stretched-link">Ver notícia.</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img img-fluid" style="height:250px; width: 200px; object-fit:cover" src="/files/notimgs/'.$noticia['notimagem'].'" alt="Imagem">
                    </div>
                </div>
            </div>
            ';
    }
}  catch (Exception $e) {
    $html = '<p style="m-2"> Não foi possível carregar as notícias.</p>';
}

echo $html;

?>