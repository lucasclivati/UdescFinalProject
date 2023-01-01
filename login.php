<?php
$useremail = isset($_POST['useremail']) ? $_POST['useremail'] : '';
$userpassword = isset($_POST['userpassword']) ? $_POST['userpassword'] : '';

$dadosPDO = [
    'dns' => 'mysql:host=sql206.byetcluster.com;dbname=epiz_33214230_db1;charset=utf8',
    'usuario' => 'epiz_33214230',
    'senha' => '87c6vq1x'
];

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

$sqlselectUser = "SELECT 
                useremail, userpassword 
                FROM user
                where (useremail = :useremail) 
                and (userpassword = PASSWORD(:userpassword))";

$consultalogin = $pdo->prepare($sqlselectUser);
$consultalogin->bindParam(':useremail', $useremail);
$consultalogin->bindParam(':userpassword', $userpassword);
$consultalogin->execute();

$resultadologin = $consultalogin->fetchAll();

var_dump($resultadologin);

?>