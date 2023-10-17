<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // variavel support recebe valor de Moldel Support 
    public function index(Support $support)
    {
        // variavel supports recebe valor da variavel support com dodos os valores de model do banco de dados
        $supports = $support->all();
        #dd($supports);

        // tudo que está no banco foi enviado para a view pela variavel supports por compact em forma de array
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {   
        // condição para verificar se o id passado é inexistente no projeto e retornar a pagina anterior caso não exista
        if (!$support = Support::find($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    
    }

    public function create()
    {
        return view('admin/supports/create');
    }
        
    
        // variavel resquest recebe Request
        // request pegar todos os dados enviados para esse método
    public function store(Request $request, Support $support)
    {   
        // variavel data recebe valores da varialvel request
        $data = $request->all();
        // inclui status para definir qual vai ser cadastrado no caso o status "a"
        $data['status'] = 'a';

        // cadastro dos dados recebido por $data do formulário no banco de dados
        // para cadastro em massa o Eloquent bloqueia por segurança então vamos configurar em model
        $support->create($data);

        return redirect()->route('supports.index');
        
    }
}
