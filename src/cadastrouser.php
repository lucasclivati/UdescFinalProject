<?php
//essa página é chamada pelo formulário da página cadastro.php
$useremail = isset($_POST['useremail']) ? $_POST['useremail'] : header('Location:/cadastro.php?error=emailincorreto');;
$userpassword = isset($_POST['userpassword']) ? $_POST['userpassword'] : header('Location:/cadastro.php?error=senhaincorreta');
$userfullname = isset($_POST['userfullname']) ? $_POST['userfullname'] : header('Location:/cadastro.php?error=usuarioincorreto');
$usermagickey = isset($_POST['magicKey']) ? $_POST['magicKey'] : header('Location:/cadastro.php?error=magicKeyincorreta');

//magicKey é uma chave mestre criada para impedir que qualquer usuário cadastre-se sem que haja autorização
//implementar um campo dentro do banco criptografado, permitir que o usuário mestre tenha autorização para trocar a magicKey
$magicKey = 'udesc';

require_once 'parametros.php';

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);

//fazer a contagem de qtd de emails com o email enviado
$selectQtdUsers = "SELECT COUNT(useremail) as contusuarios
                FROM user
                where useremail = '{$useremail}'";
$qtdUser = $db->query($selectQtdUsers)->fetchAll();

//var_dump($qtdUser[0]['contusuarios']);

IF($qtdUser[0]['contusuarios'] >= 1) {
    //Apresentar que este e-mail já foi cadastrado. Ir para tela de login
    header('Location:/areaprivada.php?erroemailemuso');
    } else {
    //Não há email ainda cadastrado, cadastrar
    //método sem criptografar e sem segurança, tentar usar bindParam
    if($usermagickey == $magicKey) {
            $sqlinsertUser = "INSERT INTO user 
                            (useremail, userpassword, userfullname)
                            VALUES
                            ('{$useremail}', '{$userpassword}', '{$userfullname}')";

            $newUser = $db->query($sqlinsertUser)->fetchAll();
            //var_dump($newUser);
            header('Location:/areaprivada.php?sucessusuariocriado'); //alert criado na página areaprivada.php
    } else {
        header('Location:/cadastro.php?errormagickeyinvalida'); //alert criado na página cadastro.php
    };
    };

?>