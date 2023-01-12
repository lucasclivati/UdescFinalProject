<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícia | CSGO NEWS - Seu portal de Notícias de Counter-Strike</title>
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
                <div id="terrorista">
                </div>
                <div><h1 class="display-3 fw-semibold border-bottom">Notícias Atuais</h1>
                </div>
            </div>
          </div>
            <div class="container" style="max-width: 25rem;">
                <?php if(isset($_GET['noticiainvalida'])) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Notícia não encontrada ou excluída.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php } ?>
            </div>
            <main class="container d-flex align-items-center justify-content-center my-1 px-2">
                <div class="container my-5">
                    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1">Lançado! Counter-strike Global Offensive é oficial</h1>
                        <p class="display-6">Jogo chega na steam a partir de 21 de agosto de 2012! </p>
                        <div>
                            <span>Autor Notícia</span>
                            |
                            <span>Data Notícia</span> 
                            |
                            <span>Data Editado</span> 
                        </div>
                      </div>
                      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                          <img class="rounded-3" src="files/imgs/novotorneioesl.webp" alt="" width="600">
                      </div>
                    </div>
                    <hr>
                    <div class="container my-5">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam eaque molestias quia a ipsam quaerat est at provident commodi facilis aut, voluptatem vero enim laborum beatae fuga aperiam numquam rerum optio distinctio consequatur hic assumenda tempora possimus? Dolorum cum animi quaerat, aliquid fugit laborum harum corporis laudantium assumenda consequatur nostrum eveniet doloremque. Quos eveniet labore dolores, quasi laudantium minima temporibus dicta illo officia aspernatur eius nisi molestias qui placeat magni facere nam dignissimos assumenda libero quam! Possimus exercitationem commodi excepturi laboriosam dignissimos at quia numquam. Esse optio porro qui cumque, tempora, suscipit similique velit perspiciatis aspernatur aperiam, dolorem distinctio. Tempore distinctio mollitia suscipit illo tempora? Labore quae doloribus enim veniam deleniti placeat fuga tempore sequi libero. Quis alias necessitatibus, quidem illum nihil, quaerat odit obcaecati quae facere eius temporibus dolore impedit dignissimos commodi aspernatur ipsa ipsam corrupti modi? Saepe consequuntur error eius quo similique explicabo fugit facere rem pariatur tenetur.
                        </p>
                      </div>
                      <hr>
                      <div>
                        <p>
                        Imagens geradas artificialmente no Midjourney. Notícia fictícia para conclusão do curso programador Fullstack UDESC-BC.
                        </p>
                      </div>
                  </div>
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
var animation = bodymovin.loadAnimation({
container: document.getElementById('terrorista'),
path: 'files/animations/terrorista.json',
render: 'svg',
loop:true,
autoplay: true,
name: 'demo animation'
});
</script>