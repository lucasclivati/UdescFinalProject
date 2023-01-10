<?php
require_once 'parametros.php';

try {
$idnoticia = isset($_GET['idnoticia']) ? $_GET['idnoticia'] : header('Location:/noticias.php?noticiainvalida');

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
                    where (idnoticia = '{$_GET['idnoticia']}')
                    LIMIT 1";
//$noticias = $db->query($selectNoticiasById)->fetchAll(PDO::FETCH_ASSOC); esse modo só é usado quando usa prepare, aí ele desfaz a associação
$noticias = $db->query($selectNoticiasById)->fetchAll();
$noticia = $noticias[0];
//var_dump($noticia);

    if(!$noticia) {
        throw new Exception('A notícia informada não existe.');
    }

    $html = '<div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title fs-5">
                            <h4 class="h4" id="nottitulo">' . $noticia['nottitulo'] . '</h4>
                            <h6 class="h6" id="notsubtitulo">' . $noticia['notsubtitulo'] . '</h6>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div id="notimagem">
                            <img src="/files/imgs/' . $noticia['notimagem'] . '" alt="errocarregarimagem">
                        </div>
                        <div id="nottexto">' . $noticia['nottexto'] . '</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>';
} catch (Exception $e) {
    $html = '<div class="modal-content">
        <div class="modal-header">
            <div class="modal-title fs-5">
                <h4 class="h4">Erro no carregamento</h4>
            </div>
        </div>
        <div class="modal-body">
            <div>
                <p>Não foi possivel carregar detalhes do produtos.</p>
                <p>' . $e->getMessage() . '</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
    </div>';
}

echo $html;

?>