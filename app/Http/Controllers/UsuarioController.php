<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index(){
        /* Para pegar todos os chamados */
        $chamados = DB::table('chamados')->get();

        /* Para pegar somente os 4 mais novos usuários */
        $usuarios = User::all();

        /* Total de Chamados Concluídos */
        $maxChamados = DB::table('chamados')
            ->where('status', 'Concluído')
            ->count();

        /* Renderizar a view dashboard.index passando os dados */
        return view('dashboard.usuarios', compact('chamados', 'usuarios', 'maxChamados'));
    }
}
