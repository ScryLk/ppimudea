<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <title>Mudea</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/my.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="masthead">
      <div class="masthead-content text-white" >
        <p class="text"><h2>Tudo sobre a sua saúde na palma da sua mão</h2></p>
          <form action="processar_formulario.php" method="POST">
            <p>Insira seu e-mail para ficar por dentro das atualizações!</p>
              <div class="input-group mb-3">
              <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" value="enviar" id="button-addon2">Me notifique!</button>
            </div>
          </form>
        </div>
      </div>
    </body>
  </html>
