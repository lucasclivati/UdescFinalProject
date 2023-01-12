<?php
session_start();
if(!$_SESSION['login']){
    session_destroy();
    header('Location:areaprivada.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciar Noticias | CSGO NEWS - Seu portal de Notícias de Counter-Strike</title>
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
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.0/lottie.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://cdn.tiny.cloud/1/4d2tncl2gavw0emj7m1i2635q5f6vg5no8uhsv9ob4d6q6h3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
        <div class="d-flex flex-row justify-content-center align-items-center py-1 px-2 bg-light">
            <div class="col d-flex align-items-center">
                <img src="/files/imgs/ak-47.png" alt="iconeak47" width="32" height="32" class="rounded-circle me-1">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Adicionar</h3>
            </div>
            <div class="col d-flex justify-content-end align-items-center" style="height: 4.5em;">
                <div class="d-flex justify-content-center btn-group" role="group" aria-label="Botoes Login" class="d-flex align-content-center">
                        <a class="col btn btn-outline-dark btn-sm" type="submit" href="gerenciarnoticias.php"><i class="bi bi-file-earmark-plus-fill"></i> Gerenciar</a>
                        <button class="col btn btn-dark btn-sm" disabled type="submit"><i class="bi bi-newspaper"></i>  Adicionar</button>
                </div>
                <div class="mx-2 d-flex" style="height: 2rem;">
                    <div class="vr"></div>
                </div>
                <div class="dropdown align-items-center">
                    <a href="#" class="link-dark align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="files/userimgs/<?php echo(isset(($_SESSION['login']['userimg'])) ? ($_SESSION['login']['userimg']) : 'imagempadraousuario.jpg') ?>" alt="" width="32" height="32" class="rounded-circle me-1">
                        <strong class="d-none d-md-inline-block"><?php echo strtok(($_SESSION['login']['userfullname']), " ")?></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="perfil.php">Editar perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="src/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <form action="src/cadastronoticia.php" method="post" enctype="multipart/form-data">
                <?php if(isset($_GET['sucessaddnoticia'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Notícia adicionada com sucesso!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php } ?>
                <?php if(isset($_GET['erroarquivoinvalido'])) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Tamanho ou formato de arquivo inválido!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php } ?>
                <div class="mb-3">
                    <label for="nottitulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="nottitulo" aria-describedby="nottituloHelp" required maxlength="50">
                    <div id="nottituloHelp" class="form-text">Máximo 50 caracteres.</div>
                </div>
                <div class="mb-3">
                    <label for="notsubtitulo" class="form-label">Sub-Título</label>
                    <input type="text" class="form-control" name="notsubtitulo" aria-describedby="notsubtituloHelp" required maxlength="150">
                    <div id="notsubtituloHelp" class="form-text">Máximo 150 caracteres.</div>
                </div>
                <div class="mb-3">
                    <label for="notimagem" class="form-label">Imagem Principal</label>
                    <input type="file" accept=".webp, .jpg, .png, .WEBP, .JPG, .PNG" class="form-control" id="notimagem" name="notimagem" aria-describedby="notimagemHelp" required>
                    <div id="notimagemHelp" class="form-text">É possível arrastar o arquivo para a tela. Imagem recomendada 4:3 (1536x1024 pixels).</div>
                </div>
                <textarea id="mytextarea" name="nottexto" required placeholder="Preencha aqui o texto da notícia."></textarea>
                
                <!-- ESSE ERA UM FORMULÁRIO ANTIGO, MAS AS NOTÍCIAS FICARAM SEM FORMATAÇÃO, AI ADICIONEI O TINY
                    <div class="mb-3">
                    <label for="nottexto" class="form-label">Texto da notícia</label>
                    <input type="text" class="form-control" name="nottexto" aria-describedby="nottextoHelp">
                    <div id="nottextoHelp" class="form-text">Máximo 400 caracteres.</div>
                    </div>
                -->

                <button type="submit" class="btn btn-dark mt-3">Enviar Notícia</button>
            </form>
            <?php if(isset($_GET['sucess'])) { ?>
                <div  class="alert alert-success alert-dismissible fade show my-2" role="alert">
                    Notícia cadastrada com sucesso.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
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
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      content_langs: [
        { title: 'Portuguese', code: 'pt' }
      ],
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>