<?php
$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];


$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

var_dump($db); //linha para certificar que o db fez a conexão corretamente.

//Daqui para baixo são dois exemplos de inserção manual de dados;
$insertUser = "INSERT INTO user (useremail, userpassword, userfullname) VALUES ('lucascli@hotmail.com', password('123456'), 'Testenome Sobrenome')";
$db->exec($insertUser);
echo "Usuário inserido com sucesso!"

/*
$insertNoticias = "INSERT INTO noticias (useremail, nottitulo, notsubtitulo, notdatacriado, notdataeditado, notimagem) VALUES ('financeiro@grupotrinita.com', 'Titulo Noticia Teste', 'Subtitulo teste com mais caracteres', '2022/12/31', '','')";
$db->exec($insertNoticias);
echo "Notícia inserida com sucesso!"
*/

/*
//Daqui para baixo são dois exemplos de select do banco de dados;
$sqlselectUser = "select useremail, userpassword, userfullname from user";
$user = $db->query($sqlselectUser)->fetchAll();
var_dump($user);

$sqlselectNoticias = "select useremail, nottitulo, notsubtitulo, notdatacriado, notdataeditado, notimagem from noticias";
$noticias = $db->query($sqlselectNoticias)->fetchAll();
//var_dump($noticias);
foreach($noticias as $noticiaAtual) {
    echo "<p>Título da notícia atual: {$noticiaAtual['nottitulo']}, criada por {$noticiaAtual['useremail']}</p>";
};

//Daqui para baixo é um exemplos de update manual de dados;
if(isset($_GET['iduser']) && isset ($_GET['useremail'])) { 
$sqlUpdateUser = "UPDATE user SET useremail = '{$_GET['useremail']}' where (iduser = '{$_GET['iduser']}')";
  $db->exec($sqlUpdateUser);
  echo "E-mail atualizado com sucesso!";
} else {
    echo "Não foram passados dados para update!";
};

//Daqui para baixo é um exemplo de delete manual;
if(isset($_GET['iduser'])) { 
    $sqlDeleteUser = "DELETE FROM user where (iduser = '{$_GET['iduser']}')";
      $db->exec($sqlDeleteUser);
      echo "Usuário deletado com sucesso!";
    } else {
        echo "Não foi deletado nenhum usuário!";
    };
*/
?>