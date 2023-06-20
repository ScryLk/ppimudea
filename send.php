<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <title>Mudea</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="spacing" >
      <div class="inicio">
        <div class="inicio-conteudo" >
        <div class="flexcontainer">
          <h1>Tudo sobre a sua saúde na palma da sua mão</h1>
            <form action="processar_formulario.php" method="POST">    
              <p>Insira seu e-mail para ficar por dentro das atualizações!</p>           
               <div class="form__group field">
                <input placeholder="E-mail" name="email"class="input-style" type="text">
                <label  class="form__label"></label><br>
                <button class="send" type="submit">Me notifique</button><br>
                </div>   
              </div>    
            </form>
          </div>
        <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="max-width: 551px; height: 540px">
          <div class="carousel-item active" data-ride="carousel">
            <img src="src/frames/image1.png" alt="Imagem" >
          </div>
          <div class="carousel-item">
            <img src="src/frames/image3.png" alt="Imagem" >
          </div>
          <div class="carousel-item">
            <img src="src/frames/image1.png" alt="Imagem" >
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
      </div>
    </div>   
  </body>
</html>
