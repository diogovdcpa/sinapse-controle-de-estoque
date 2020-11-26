<?php

namespace app\controllers;

use app\core\Controller;

class ConsultaController extends Controller
{

    public function index()
    {
        $dados["view"] = "home";
        $this->load("template", $dados);
    }

    public function entrada()
    {
        $dados["view"] = "Consultas/entrada_consulta";
        $this->load("template", $dados);
    }

    public function saida()
    {
        $dados["view"] = "Consultas/saida_consulta";
        $this->load("template", $dados);
    }

    public function movimentacao()
    {
        $dados["view"] = "Consultas/movimentacao_consulta";
        $this->load("template", $dados);
    }

    public function venda()
    {
        $dados["view"] = "Consultas/venda_consulta";
        $this->load("template", $dados);
    }
}
