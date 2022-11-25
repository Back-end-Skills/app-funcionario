<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Funcionario;

    class FuncionarioController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        
        public function index(Funcionario  $func)
        {
            $funcionarios = $func->all();

            return view('index', compact('funcionarios'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'nome' => 'required',
                'cpf' => 'required',
                'carteira_trabalho' => 'required',
                'setor' => 'required',
                'contato' => 'required'
            ]);

            Funcionario::create($request->all());

            return redirect('/')
                    ->with('success', 'Funcionário Cadastro com sucesso.');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        public function edit($id)
        {
            $funcionarios=Funcionario::find($id);

            return view('edit', compact('funcionarios'));
        }

        public function update(Request $request, $id)
        {
            Funcionario::where(['id'=>$id])->update([
                'nome'=>$request->nome,
                'cpf'=>$request->cpf,
                'carteira_trabalho'=>$request->carteira_trabalho,
                'setor'=>$request->setor,
                'contato'=>$request->contato
            ]);

            return redirect('/')
                    ->with('success', 'Funcionário Atualizado com sucesso');
        }

        
        public function destroy($id)
        {
            Funcionario::find($id)->delete();

            return redirect('/')
                    ->with('success', 'Funcionário deletado com sucesso');
        }

    }
