<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Produtos</title>

</head>
<body>


    <form name= "frmPedidos"  action="/action_page.php">

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome"  placeholder="" name="nome">
        </div>


        <div class="form-group">
          <label for="marca">Marca:</label>
          <input type="text" class="form-control" id="marca"  placeholder="" name="marca">
        </div>


        <div class="form-group">
          <label for="modelo">Modelo:</label>
          <input type="text" class="form-control" id="modelo"  placeholder="" name="modelo">
        </div>

        <div class="form-group">
          <label for="Descricao">Descrição:</label>
          <input type="text" class="form-control" id="descricao"  placeholder="" name="descricao">
        </div>


        <div class="form-group">
          <label for="Unidadedemedida">Unidade de Medida:</label>
          <input type="text" class="form-control" id="unidadeMedida"  placeholder="" name="unidadeMedida">
        </div>


        <div class="form-group">
          <label for="largura">Largura:</label>
          <input type="number" class="form-control" id="largura"  placeholder="" name="largura">
        </div>


        <div class="form-group">
          <label for="altura">Altura:</label>
          <input type="number" class="form-control" id="altura"  placeholder="" name="altura">
        </div>


        <div class="form-group">
          <label for="tipofrete">Tipo de Frete:</label>
          <input type="text" class="form-control" id="tipoFrete"  placeholder="" name="tipoFrete">
        </div>


        <div class="form-group">
          <label for="profundidade">Profundidade:</label>
          <input type="number" class="form-control" id="profundidade"  placeholder="" name="profundidade">
        </div>


        <div class="form-group">
          <label for="peso">Peso:</label>
          <input type="number" class="form-control" id="peso"  placeholder="" name="peso">
        </div>
        
         <div class="form-group">
          <label for="cor">Cor:</label>
          <input type="text" class="form-control" id="cor"  placeholder="" name="cor">
        </div>
        
         <div class="form-group">
          <label for="fabricante">Fabricante:</label>
          <input type="text" class="form-control" id="fabricante"  placeholder="" name="fabricante">
        </div>
        
        

        <button type="submit" class="btn btn-primary" name="enviar">Enviar </button>
</form>


</body>
</html>