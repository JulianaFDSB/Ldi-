<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Usuários</title>

</head>
<body>


   <form action="/action_page.php">
   
  <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="" name="senha">
    </div>
    
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="name" placeholder="Nome Completo" name="nome">
    </div>
    
    <div class="form-group">
      <label for="cpf">Cpf:</label>
      <input type="number" class="form-control" id="cpf" placeholder="17015317830" name="cpf">
    </div>
    
    
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco">
    </div>
    
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
    </div>
    
    <div class="form-group">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" placeholder="" name="cidade">
    </div>
    
    <div class="form-group">
      <label for="uf">Uf:</label>
      <input type="text" class="form-control" id="uf" placeholder="" name="uf">
    </div>
    
    <div class="form-group">
      <label for="cep">Cep:</label>
      <input type="number" class="form-control" id="cep" placeholder="" name="cep">
    </div>
    
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="number" class="form-control" id="telefone" placeholder="24577327" name="telefone">
    </div>
    
    <div class="form-group">
      <label for="foto">Foto:</label>
      <input type="file" class="form-control" id="foto" placeholder="" name="foto">
    </div>
    
    <button type="submit" class="btn btn-warning">Enviar</button>
  </form>


</body>
</html>