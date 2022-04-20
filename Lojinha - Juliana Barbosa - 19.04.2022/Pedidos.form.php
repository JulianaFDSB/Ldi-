<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Pedidos</title>

</head>
<body>


    <form name= "frmPedidos"  action="/action_page.php">

        <div class="form-group">
          <label for="Datapedido">Data do Pedido:</label>
          <input type="date" class="form-control" id="dtPedido"  placeholder="" name="dtPedido">
        </div>


        <div class="form-group">
          <label for="datapagamento">Data do Pagamento:</label>
          <input type="date" class="form-control" id="dtPagamento"  placeholder="" name="quantidade">
        </div>


        <div class="form-group">
          <label for="dtnotafiscal">Data de nota Fiscal:</label>
          <input type="date" class="form-control" id="dtNotaFiscal"  placeholder="" name="dtNotaFiscal">
        </div>

        <div class="form-group">
          <label for="Dataenvio">Data de Envio:</label>
          <input type="date" class="form-control" id="dtEnvio"  placeholder="" name="dtEnvio">
        </div>


        <div class="form-group">
          <label for="notafiscalcompra">Nota fiscal da Compra:</label>
          <input type="text" class="form-control" id="notaFiscal"  placeholder="" name="notaFiscal">
        </div>


        <div class="form-group">
          <label for="dataenvio">Data de Envio:</label>
          <input type="date" class="form-control" id="dtEnvio"  placeholder="" name="dtEnvio">
        </div>


        <div class="form-group">
          <label for="datarecebimento">Data de Recebimento:</label>
          <input type="date" class="form-control" id="dtRecebimento"  placeholder="" name="dtRecebimento">
        </div>


        <div class="form-group">
          <label for="tipofrete">Tipo de Frete:</label>
          <input type="text" class="form-control" id="tipoFrete"  placeholder="" name="tipoFrete">
        </div>


        <div class="form-group">
          <label for="rastreiodofrete">Rastreio do Frete:</label>
          <input type="text" class="form-control" id="entregaendereco"  placeholder="" name="entregaendereco">
        </div>


        <div class="form-group">
          <label for="numero">Número:</label>
          <input type="number" class="form-control" id="entregaNumero"  placeholder="" name="entregaNumero">
        </div>
        
         <div class="form-group">
          <label for="compl">Complemento:</label>
          <input type="text" class="form-control" id="entregaCompl"  placeholder="" name="entregaCompl">
        </div>
        
         <div class="form-group">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="entregaBairro"  placeholder="" name="entregaBairro">
        </div>
        
         <div class="form-group">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="entregCidade"  placeholder="" name="entregaCidade">
        </div>
        
         <div class="form-group">
          <label for="uf">Uf:</label>
          <input type="text" class="form-control" id="entregaUF"  placeholder="" name="entregaUF">
        </div>
        
        <div class="form-group">
          <label for="cep">Cep:</label>
          <input type="number" class="form-control" id="entregaCEP"  placeholder="" name="entregaCEP">
        </div>
        
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="number" class="form-control" id="entregaTelefone"  placeholder="" name="entregaTelefone">
        </div>
        
        <div class="form-group">
          <label for="referencia">Referência:</label>
          <input type="text" class="form-control" id="entregaRefer"  placeholder="" name="entregaRefer">
        </div>
        
        <div class="form-group">
          <label for="vslortotal">Valor Total:</label>
          <input type="number" class="form-control" id="valorTotal"  placeholder="" name="valorTortal">
        </div>
        
        
        <div class="form-group">
          <label for="qtditems">Quantidade de Items:</label>
          <input type="number" class="form-control" id="qtdItems"  placeholder="" name="qtdItems">
        </div>
        
        <div class="form-group">
          <label for="datadevolucao">Data de Devolução:</label>
          <input type="date" class="form-control" id="dtDevolucao"  placeholder="" name="dtDevolucao">
        </div>
        
        <div class="form-group">
          <label for="numero">Motivo da Devolução:</label>
          <input type="text" class="form-control" id="motivoDevolucao"  placeholder="" name="motivoDevolucao">
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar </button>
</form>


</body>
</html>