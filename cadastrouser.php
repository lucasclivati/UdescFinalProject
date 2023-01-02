<?php
$useremail = isset($_POST['useremail']) ? $_POST['useremail'] : '';
$userpassword = isset($_POST['userpassword']) ? $_POST['userpassword'] : '';
$userfullname = isset($_POST['userfullname']) ? $_POST['userfullname'] : '';

$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

//método sem criptografar e sem segurança, foi testado e deu ok//
$sqlinsertUser = "INSERT INTO user 
                (useremail, userpassword, userfullname)
                VALUES
                ('{$useremail}', '{$userpassword}', '{$userfullname}')";

$newUser = $db->query($sqlinsertUser)->fetchAll();
//var_dump($newUser);
header('Location:areaprivada.php?');
?>