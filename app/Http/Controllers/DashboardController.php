<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\SlackService;

class DashboardController extends Controller
{
    protected $slackService;

    // Construtor para injetar o SlackService
    public function __construct(SlackService $slackService)
    {
        $this->slackService = $slackService;
    }

    public function index()
    {
        /* Para pegar todos os chamados */
        $chamados = DB::table('chamados')->get();

        /* Para pegar somente os 4 mais novos usuários */
        $usuarios = DB::table('users')->orderBy('id', 'desc')->paginate(4);

        /* Total de Chamados Concluídos */
        $maxChamados = DB::table('chamados')
            ->where('status', 'Concluído')
            ->count();
        // Usa o SlackService injetado
        $messages = $this->slackService->fetchMessages('#geral', 10);

        $messages = $this->slackService->fetchMessages('C1234567890', 10);
        /* Renderizar a view dashboard.index passando os dados */
        return view('dashboard.index', compact('chamados', 'usuarios', 'maxChamados', 'messages'));
    }
}
