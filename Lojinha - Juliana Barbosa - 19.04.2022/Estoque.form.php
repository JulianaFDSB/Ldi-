<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Estoque</title>

</head>
<body>


    <form name= "frmEstoque"  action="/action_page.php">

        <div class="form-group">
          <label for="Dataentrada">Data de Entrada:</label>
          <input type="date" class="form-control" id="dtEntrada"  placeholder="" name="dataentrada">
        </div>


        <div class="form-group">
          <label for="quantidade">Quantidade:</label>
          <input type="number" class="form-control" id="quantidade"  placeholder="" name="quantidade">
        </div>


        <div class="form-group">
          <label for="Datafabricação">Data de Fabricação:</label>
          <input type="date" class="form-control" id="dtFabricacao"  placeholder="" name="datafabaricação">
        </div>

        <div class="form-group">
          <label for="Datavencimento">Data de Vencimento:</label>
          <input type="date" class="form-control" id="dtVencimento"  placeholder="" name="datafabricação">
        </div>


        <div class="form-group">
          <label for="notafiscalcompra">Nota fiscal da Compra:</label>
          <input type="text" class="form-control" id="nfCompra"  placeholder="" name="notafiscalcompra">
        </div>


        <div class="form-group">
          <label for="precocompra">Preço da Compra:</label>
          <input type="number" class="form-control" id="precoCompra"  placeholder="" name="preçocompra">
        </div>


        <div class="form-group">
          <label for="preçovenda">Preço da Venda:</label>
          <input type="number" class="form-control" id="precoVenda"  placeholder="" name="preçodavenda">
        </div>


        <div class="form-group">
          <label for="qtdvendida">Quantidade Vendida:</label>
          <input type="number" class="form-control" id="qtdVendida"  placeholder="" name="quantidadevendida">
        </div>


        <div class="form-group">
          <label for="qtdocorrencia">Quantidada de ocorrência:</label>
          <input type="number" class="form-control" id="qtdOcorrencia"  placeholder="" name="qtdocorrencia">
        </div>


        <div class="form-group">
          <label for="ocorrencia">Ocorrência:</label>
          <input type="number" class="form-control" id="ocorrencia"  placeholder="" name="ocorrencia">
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar </button>
</form>


</body>
</html>