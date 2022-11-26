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
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>
 
<div class="container">

<div class="py-5 text-center">
            
        
            <h2>Funcionário {{ $funcionario->nome }}</h2>
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
                            <th><span>Data Criaçao</span></th>
                            <th><span>Última Atualização</span></th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
                 
						
						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""/>
								
							 <p><strong>	<mark> {{ $funcionario->nome }} </mark> </strong></p>
								
								<span class="user-subhead">{{ $funcionario->setor }}</span>
							</td>

							<td>  {{ $funcionario->cpf }}</td>
							<td class="text-center"> <span class="label label-success">{{ $funcionario->contato }} </span> </td>
							<td>  {{ $funcionario->carteira_trabalho }} </td>

                            <td>{{ $funcionario->created_at }} </td>
                            <td>{{ $funcionario->updated_at }} </td>
                            
							<td style="width: 20%;">
								
								<a href="/edit/{{ $funcionario->id }}" class="btn btn-info edit-btn"> Editar </a> <br><br>

                                <form action="/{{ $funcionario->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        
                                        <button type="submit" class="btn btn-danger" onclick="return (confirm('Deseja Deletar o funcionário {{ $funcionario->nome }} ? '))">Delete</button>
                                    
                                </form>                            
							</td>                           
						</tr>
        
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>
</div>



</body>

</html>




