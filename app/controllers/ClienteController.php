<?php
namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller{
    
   public function index(){
       $dados["view"]="Cadastro/lst_cliente";
       $this->load("template",$dados);
   }
   
   public function cadastrar(){
    $dados["view"]="Cadastro/form_cliente";
    $this->load("template",$dados);
}
}
