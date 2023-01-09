<?php
//essa página é chamada pelo formulário da página cadastro.php
$useremail = isset($_POST['useremail']) ? $_POST['useremail'] : '';
$userpassword = isset($_POST['userpassword']) ? $_POST['userpassword'] : '';
$userfullname = isset($_POST['userfullname']) ? $_POST['userfullname'] : '';

require_once 'src/parametros.php';

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