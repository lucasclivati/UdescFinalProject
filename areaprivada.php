<?php
session_start();
if($_SESSION['login']){
    header('Location:gerenciarnoticias.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área Privada | CSGO NEWS - Seu portal de Notícias de Counter-Strike</title>
        <link rel="shortcut icon" href="files/logo/icon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.0/lottie.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <style>
           .form-signin {
            max-width: 330px;
            padding: 15px;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }
            
            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }
        </style>
    </head>
    <nav class="navbar navbar-expand-sm navbar-dark" id="menuprincipal">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="files/logo/logo.png" alt="Logo CSGO News" height="90"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenulista">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-sm-end m-1" id="navmenulista">
            <ul class="navbar-nav float-end my-2">
            <li class="nav-item">
                <a class="nav-link" href="areaprivada.php"><button class="btn btn-outline-secondary" type="button">Área privada</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faleconosco.php"><button class="btn btn-outline-secondary" type="button">Fale conosco</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="noticias.php"><button class="btn btn-outline-light" type="button">Notícias</button></a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <body>
        <div class="container my-1 px-2">
            <div class="d-flex flex-wrap justify-content-center mt-4">
              <!-- essa div debaixo puxaria automaticamente o terrorista girando via js (var animation), mas o inifinity não carregou arquivo json.
                <div id="terrorista">
                </div>-->
                <div>
                  <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_smu40fjv.json"  background="transparent"  speed="1"  style="height: 80px;"  loop autoplay></lottie-player>
                </div>
                <div><h1 class="display-3 fw-semibold border-bottom">Área Privada</h1>
                </div>
            </div>
          </div>
        <main class="form-signin m-auto bg-light mb-5 border">
          <form action="src/login.php" method="post">
                <div class="d-flex justify-content-center btn-group mb-2" role="group" aria-label="Botoes Login" class="d-flex align-content-center">
                    <button class="col btn btn-dark" disabled type="submit">Área Privada</button>
                    <a class="col btn btn-outline-dark" type="submit" href="cadastro.php">Cadastrar-se</a>
                </div>
                <?php if(isset($_GET['sucessusuariocriado'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Usuário criado com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                <?php if(isset($_GET['erroemailemuso'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        E-mail já em uso, faça seu login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            <p class="my-2 text-center">
                Realize seu login para postar notícias quentinhas de CSGO.
            </p>
            <div class="form-floating">
              <input type="email" class="form-control" name="useremail" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Endereço E-mail</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="userpassword" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Senha</label>
            </div>
            <?php if(isset($_GET['errologin'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Verifique os dados informados.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Entrar</button>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Lembrar-me
              </label>
            </div>
          </form>
          <p class="text-center mt-3">Sem cadastro? Crie um <a href="cadastro.php">agora</a>.</p>
        </main>
        </body>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-1 my-1 border-top">
        <div class="col justify-content-start">
            <ul class="nav">
            <li class="nav-item"><a href="areaprivada.php" class="nav-link px-2">Área Privada</a></li>
            <li class="nav-item"><a href="faleconosco.php" class="nav-link px-2">Fale Conosco</a></li>
            <li class="nav-item"><a href="noticias.php" class="nav-link px-2">Notícias</a></li>
            </ul>
        </div>
        <div class="col text-center">
            <a href="index.php" class="col me-md-auto"><img src="files/logo/logo.png" alt="Logo CSGO News" height="90" ></a>
        </div>
        <div class="col text-end">
            <a href="https://github.com/lucasclivati" class="text-decoration-none" style="color: #251629;"><p>&copy; 2022 Lucas Clivati</p></a>
        </div>
        </footer>
    </div>
        
</html>
<script>
  /*var animation = bodymovin.loadAnimation({
    container: document.getElementById('terrorista'),
    path: 'files/animations/terrorista.json',
    render: 'svg',
    loop:true,
    autoplay: true,
    name: 'demo animation'
  });*/
</script>