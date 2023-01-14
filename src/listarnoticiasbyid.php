<?php
require_once 'parametros.php';

try {
    $idnoticia = isset($_GET['idnoticia']) ? $_GET['idnoticia'] : '';

    if (!$idnoticia) {
        throw new Exception('Deve ser informada uma notícia a ser localizada.');
    }

    $db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

    $selectNoticiasById = "SELECT
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
                        where (idnoticia = '{$_GET['idnoticia']}')
                        LIMIT 1";
    //$noticias = $db->query($selectNoticiasById)->fetchAll(PDO::FETCH_ASSOC); esse modo só é usado quando usa prepare, aí ele desfaz a associação
    $noticias = $db->query($selectNoticiasById)->fetchAll();
    $noticia = $noticias[0];
    //var_dump($noticia);

    if(!$noticia) {
        throw new Exception('A notícia informada não existe.');
    }

    $html = '
                <div class="container my-5">
                    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1">'. $noticia['nottitulo'] . '</h1>
                        <p class="display-6">'.$noticia['notsubtitulo'].'</p>
                        <div>
                            <span>Notícia postada por '.$noticia['useremail'].' em '.$noticia['notdatacriadoformated'].'.</span> 
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-3 img-fluid" src="/files/notimgs/'.$noticia['notimagem'].'" alt="Imagem">
                    </div>
                    </div>
                    <hr>
                    <div class="container my-5">
                        <p>
                        '.$noticia['nottexto'].'
                        </p>
                    </div>
                    <hr>
                </div>
                <div>
                    <p style="font-size: 0.85rem">
                        Imagens geradas artificialmente no Midjourney. <br>Notícia fictícia para conclusão do curso programador Fullstack UDESC-BC.
                    </p>
                </div>
                ';
}  catch (Exception $e) {
    $html = '<p style="m-2"> Não foi possível carregar a notícia.</p>';
}

echo $html;

?>