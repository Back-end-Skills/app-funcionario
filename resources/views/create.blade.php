<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    
    <!-- style funcionarios  -->
    <link href="/css/func.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    


<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        HOME
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      
      <li><a href="" class="nav-link px-2 link-dark">Lista Funcionários</a></li>
        <li><a href="" class="nav-link px-2 link-dark">Registrar</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>

    <div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="rounded d-block mx-auto mb-4" src="https://tse1.mm.bing.net/th?id=OIP.Xl_hB-SlS0exLJIZOLviwwHaE8" alt="" width="92" height="77">
        
            <h2>Cadastrar Novo Funcionário</h2>
        </div>



        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="row">
        <div class="col-md-7 col-lg-8">
           
            <form action="/store" method="POST" name="formCad" id="formCad">
            @csrf
            <div class="row g-3">

                <div class="col-sm-6">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text"  class="form-control" name="nome" id="nome" required>
               
                </div>

                <div class="col-sm-6">
                  <label for="carteira_trabalho" class="form-label">Carteira de Trabalho</label>
                  <input type="text" name="carteira_trabalho" class="form-control" required>
                  
                </div>

              

                <div class="col-sm-6">
                  <label for="cpf" class="form-label">CPF</label>
                  <input type="text" name="cpf" class="form-control" id="cpf" required>
              
                </div>

                <div class="col-md-6">
                  <label for="setor" class="form-label">Setor</label>
                  <select class="form-select" id="setor" name="setor" required>
                      
                      <option value="vendas">Vendas</option>
                      <option value="escritorio">Escritório</option>
                      <option value="estoque">Estoque</option>
                      <option value="administrativo">Administrativo</option>
                  
                  </select>                
                </div>

                <div class="col-sm-6" id="contato">
                  <label for="" class="form-label">Telefone</label>
                  <input type="text" name="contato" class="form-control" required> <buttom type='button' onclick="addContato()"> + </button>
                  
                </div>

            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
            </form>
        </div>
        </div>


    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2022 Dev.  Isaque Menezes </p>
        <ul class="list-inline">
        <li class="list-inline-item"><a href="/">HOME</a></li>
        <li class="list-inline-item"><a href="/funcionarios">Lista Funcionários</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>


  
<script src="/js/main.js"></script>

</body>
</html>