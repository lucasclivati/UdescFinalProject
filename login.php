<?php
$useremail = isset($_POST['useremail']) ? $_POST['useremail'] : '';
$userpassword = isset($_POST['userpassword']) ? $_POST['userpassword'] : '';

require_once 'src/parametros.php';

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

//método sem criptografar e sem segurança, foi testado e deu ok//
$sqlselectUser = "SELECT 
                iduser, useremail, userpassword, userfullname, userimg
                FROM user
                where useremail = '{$useremail}' 
                and userpassword = '{$userpassword}'";

$user = $db->query($sqlselectUser)->fetchAll();
//var_dump($user);

session_start();

if ($user) {
    $_SESSION['login'] = [
        'iduser' => $user[0]['iduser'],
        'userfullname' => $user[0]['userfullname'],
        'userimg' => $user[0]['userimg'],
        'useremail' => $user[0]['useremail'],
    ];
    var_dump($_SESSION['login']);
    header('Location:gerenciarnoticias.php');
} else {
    session_destroy();
    header('Location:areaprivada.php?erro=1');
};

//método usando bindParam não funcionou de jeito nenhum, deixei de fora, tentei trocando todas as aspas e tudo mais e não foi
/*
$sqlselectUser = "SELECT 
                useremail, userpassword
                FROM user
                WHERE 
                (useremail = :useremail)
                AND (userpassword = :userpassword)";
$consultalogin = $pdo->prepare($sqlselectUser);
$consultalogin->bindParam(':useremail', $useremail);
$consultalogin->bindParam(':userpassword', $userpassword);
$consultalogin->execute();
$resultadologin = $consultalogin->fetchAll();
var_dump($resultadologin);
*/
?>