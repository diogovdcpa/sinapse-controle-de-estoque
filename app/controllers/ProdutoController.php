<?php

namespace app\controllers;

use app\core\Controller;

class ProdutoController extends Controller
{

    public function index()
    {
        $dados["view"] = "Cadastro/lst_produto";
        $this->load("template", $dados);
    }

    public function entrada()
    {
        $dados["view"] = "Estoque/entrada_produto";
        $this->load("template", $dados);
    }

    public function saida()
    {
        $dados["view"] = "Estoque/entrada_saida";
        $this->load("template", $dados);
    }

    public function cadastrar()
    {
        $dados["view"] = "Cadastro/form_produto";
        $this->load("template", $dados);
    }
}
