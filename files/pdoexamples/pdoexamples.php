<?php
$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];


$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

var_dump($db);

$insertUser = "INSERT INTO users (useremail, userpassword, userfullname) VALUES ('financeiro@grupotrinita.com', '123456', 'lucastest')";
$insertNoticias = "INSERT INTO noticias (useremail, nottitulo, notsubtitulo, notdatacriado, notdataeditado, notimagem) VALUES ('financeiro@grupotrinita.com', 'Titulo Noticia Teste', 'Subtitulo teste com mais caracteres', '2022/12/31', '','')";

//$db->exec($insertUser);
//echo "Usuário inserido com sucesso!"

$db->exec($insertNoticias);
echo "Notícia inserida com sucesso!"


?>