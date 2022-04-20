<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Items do Pedido</title>

</head>
<body>


    <form name= "frmItemsPedido" action="/action_page.php">

        <div class="form-group">
          <label for="ordem">Ordem:</label>
          <input type="text" class="form-control" id="ordem"  placeholder="" name="ordem">
        </div>


        <div class="form-group">
          <label for="qtditems">Quantidade de Items:</label>
          <input type="number" class="form-control" id="qtdItem"  placeholder="" name="qtdItem">
        </div>


        <div class="form-group">
          <label for="datadevolucao">Data de Devolução:</label>
          <input type="date" class="form-control" id="dtDevolucao"  placeholder="" name="dtDevolucao">
        </div>

        <div class="form-group">
          <label for="Sexo">Motivo da Devolução:</label>
          <input type="text" class="form-control" id="motivoDevolucao"  placeholder="" name="motivoDevolucao">
        </div>


        
        <button type="submit" class="btn btn-primary" name="enviar">Enviar </button>
</form>


</body>
</html>