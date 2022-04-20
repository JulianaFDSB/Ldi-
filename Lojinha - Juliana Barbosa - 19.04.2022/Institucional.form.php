<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Institucional</title>

</head>
<body>


    <form name= "frmInstitucional" action="/action_page.php">

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="dtEntrada"  placeholder="" name="dataentrada">
        </div>


        <div class="form-group">
          <label for="quantidade">Quantidade:</label>
          <input type="number" class="form-control" id="nome"  placeholder="" name="nome">
        </div>


        <div class="form-group">
          <label for="cpfcnpj">Cpf/Cnpj:</label>
          <input type="number" class="form-control" id="cpf_cnpj"  placeholder="" name="cpfcnpj">
        </div>

        <div class="form-group">
          <label for="Sexo">Sexo:</label>
          <input type="text" class="form-control" id="tipoPessoa"  placeholder="" name="tipopessoa">
        </div>


        <div class="form-group">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" id="endereco"  placeholder="" name="endereco">
        </div>


        <div class="form-group">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro"  placeholder="" name="bairro">
        </div>


        <div class="form-group">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="cidade"  placeholder="" name="cidade">
        </div>


        <div class="form-group">
          <label for="uf">Uf:</label>
          <input type="text" class="form-control" id="uf"  placeholder="" name="uf">
        </div>


        <div class="form-group">
          <label for="cep">Cep:</label>
          <input type="number" class="form-control" id="cep"  placeholder="" name="cep">
        </div>


        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="number" class="form-control" id="telefone"  placeholder="" name="telefone">
        </div>
        
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email"  placeholder="" name="email">
        </div>
        
        <div class="form-group">
          <label for="logo">Logo:</label>
          <input type="file" class="form-control" id="logo"  placeholder="" name="logo">
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar </button>
</form>


</body>
</html>