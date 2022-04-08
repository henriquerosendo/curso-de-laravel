<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Paulo";
        $idade = 21;
        $profissao = "Desenvolvedor Full Stack";
        $n1 = 76 + 24;
        $arr = [10,20,30,40,50,60,70];
        $nomes = ["Paulo", "Gabriella", "Josiene", "Vanessa", "Isabella"];
     
        return view('welcome',
                [
                    'nome' => $nome ,
                    'n1'=> $n1,
                    'idade' => $idade,
                    'profissao' =>$profissao,
                    'arr' => $arr,
                    'nomes' => $nomes
                ]);
    }

    public function create() {
        return view('events/create');
    }
}
