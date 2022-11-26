<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    
    <!-- style funcionarios  -->
    <link href="/css/func.css" rel="stylesheet" type="text/css" />
    

</head>

<body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        HOME
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      
        <!-- <li><a href="/" class="nav-link px-2 link-dark">Lista Funcionários</a></li> -->
        <li><a href="/create" class="nav-link px-2 link-dark">Registrar</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Feat-Confirm-Delete</button>
      </div>
    </header>
  </div>
 
<div class="container">

<div class="py-5 text-center">
            
        
            <h2>Lista de Funcionários</h2>
        </div>


<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">


			@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
			@endif


				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Funcionário</span></th>
							<th><span>Cpf</span></th>
							<th class="text-center"><span>Contato</span></th>
							<th><span>Carteira Trabalho</span></th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
                    @foreach ($funcionarios as $func)
						
						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
								<a href="#" class="user-link">{{ $func->nome }}</a>
								<span class="user-subhead">{{ $func->setor }}</span>
							</td>

							<td>  {{ $func->cpf }}</td>
							<td class="text-center"> <span class="label label-success">{{ $func->contato }} </span> </td>
							<td> {{ $func->carteira_trabalho }}</td>
                            
							<td style="width: 20%;">
								
								<a href="/edit/{{ $func->id }}" class="btn btn-info edit-btn"> Editar </a> <br><br>

                                <form action="/{{ $func->id }}" method="post" id="formulario">
									@csrf
                                	@method('DELETE')
                                        
									<button class="btn btn-danger" onclick="return confirm('Deseja Deletar o Funcionário ?')"> Deletar </button>
                                    
                                </form>
							</td>                            
						</tr>
            @endforeach
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>
</div>

</body>

</html>




