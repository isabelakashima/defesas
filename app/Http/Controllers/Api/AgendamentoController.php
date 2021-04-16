<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Utils\ReplicadoUtils;

class AgendamentoController extends Controller
{
    public function index(){
        $agendamentos = Agendamento::join('docentes', 'docentes.n_usp', '=', 'agendamentos.orientador')
                ->select('docentes.nome AS orientador','titulo','data_horario', 'agendamentos.nome','nivel')
                ->where('agendamentos.data_horario','>=',date('Y-m-d H:i:s'))
                ->get();
        
        foreach($agendamentos as $agendamento){
            $agendamento->programa = ReplicadoUtils::nomeAreaPrograma($agendamento->area_programa);
        }
        return response()->json($agendamentos);
    }
}
