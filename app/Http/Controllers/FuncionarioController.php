<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\UserStoreRequest;
    use Illuminate\Http\Request;
    use App\Models\Funcionario;
    use Illuminate\Support\Facades\DB;

    class FuncionarioController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        
        public function index(Funcionario  $func)
        {
            // $funcionarios = $func->all();
            $funcionarios = DB::table('funcionarios')->orderByRaw('id DESC')->get();

            return view('funcionarios.index', compact('funcionarios'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('funcionarios.create');
        }

        public function store(UserStoreRequest $request)
        {
            //dd($request->all());
            // $request->validate([
            //     'nome' => 'required',
            //     'cpf' => 'required',
            //     'carteira_trabalho' => 'required',
            //     'setor' => 'required',
            //     'contato' => 'required'
            // ]);
            $request->validated();

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
            $funcionario = Funcionario::find($id);

           // dd()

            return view('funcionarios.show', compact('funcionario'));
        }

        public function edit($id)
        {
            $funcionarios=Funcionario::find($id);

            return view('funcionarios.edit', compact('funcionarios'));
        }

        public function update(Request $request, $id)
        {
            Funcionario::where(['id'=>$id])->update([
                'nome'=>$request->nome,
                'cpf'=>$request->cpf,
                'carteira_trabalho'=>$request->carteira_trabalho,
                'setor'=>$request->setor,
                'contato'=>$request->contato,
                'contato_2'=>$request->contato_2
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
