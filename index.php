<?php include('src/listarnoticiashome.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CSGO NEWS - Seu portal de Notícias de Counter-Strike</title>
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
    <div>
        <div class="containertype">
            <h1 class="ptype">
              <span class="cover">
                <span class="cursor">
                    |
                </span>
              </span>
              <strong>CSGO NEWS - BRASIL</strong>
            </h1>
          </div>
    </div>
     <div id="carouselCarros" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselCarros" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselCarros" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselCarros" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[0]['idnoticia'] ?>">
                    <img style="max-height:35rem; max-width:fit-content; margin: auto;" src="/files/notimgs/<?php echo $noticias[0]['notimagem'] ?>" class="d-block w-100" alt="img1">
                </a>
                <div class="carousel-caption">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[0]['idnoticia'] ?>" class="text-white text-decoration-none"><h5><mark><?php echo $noticias[0]['nottitulo'] ?></mark></h5></a>
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[0]['idnoticia'] ?>" class="text-white text-decoration-none"><p><mark><?php echo $noticias[0]['notsubtitulo'] ?></mark></p></a>
                </div>
            </div>
            <div class="carousel-item">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[1]['idnoticia'] ?>"><img style="max-height:35rem; max-width:fit-content; margin-left: auto; margin-right: auto;" src="/files/notimgs/<?php echo $noticias[1]['notimagem'] ?>" class="d-block w-100" alt="img2"></a>
                <div class="carousel-caption">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[1]['idnoticia'] ?>" class="text-white text-decoration-none"><h5><mark><?php echo $noticias[1]['nottitulo'] ?></mark></h5></a>
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[1]['idnoticia'] ?>" class="text-white text-decoration-none"><p><mark><?php echo $noticias[1]['notsubtitulo'] ?></mark></p></a>
                </div>
            </div>
            <div class="carousel-item">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[2]['idnoticia'] ?>"><img style="max-height:35rem; max-width:fit-content; margin-left: auto; margin-right: auto;" src="/files/notimgs/<?php echo $noticias[2]['notimagem'] ?>" class="d-block w-100" alt="img3"></a>
                <div class="carousel-caption">
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[2]['idnoticia'] ?>" class="text-decoration-none"><h5><mark><?php echo $noticias[2]['nottitulo'] ?></mark></h5></a>
                <a href="http://lucascliprojetofinaludesc.infinityfreeapp.com/noticia.php?idnoticia=<?php echo $noticias[2]['idnoticia'] ?>" class="text-decoration-none"><p><mark><?php echo $noticias[2]['notsubtitulo'] ?></mark></p></a>
                </div>
            </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCarros" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCarros" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
        <div class="container">
          <div class="d-flex flex-wrap justify-content-center mt-4">
              <div id="terrorista">
              </div>
              <div><h1 class="display-3 fw-semibold border-bottom">Notícias Atuais</h1>
              </div>
          </div>
        </div>
      <div class="container d-flex align-items-center justify-content-center my-1 px-2">
        <div id="noticiashome" class="row mb-2">
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-center my-2">
        <a href="noticias.php" class="btn btn-dark">Arquivo de Notícias</a>
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
  var animation = bodymovin.loadAnimation({
    container: document.getElementById('terrorista'),
    path: 'files/animations/terrorista.json',
    render: 'svg',
    loop:true,
    autoplay: true,
    name: 'demo animation'
  });
</script>
<script>
    $.get('src/listarnoticiashomeinferior.php')
        .done(function(html) {
            $('#noticiashome').append(html);
            console.log(html);
        });
</script>

