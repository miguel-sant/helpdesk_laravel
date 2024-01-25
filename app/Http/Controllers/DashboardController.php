<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        /* Para pegar todos os chamados */
        $chamados = DB::table('chamados')->get();
        
        /* Para pegar somente o 4 mais novos usuários */
        $usuarios = DB::table('users')->orderBy('id', 'desc')->paginate(4);
        
        /* Total de Chamados */
        $maxChamados = DB::table('chamados')
        ->where('status', 'Concluído')
        ->count();
        
        return view('dashboard.index',
        [
            'chamados' => $chamados,
            'usuarios' => $usuarios,
            'maxChamados' => $maxChamados
        ]);
    }
}
