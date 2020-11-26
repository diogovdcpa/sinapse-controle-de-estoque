<?php
namespace app\controllers;
use app\core\Controller;

class VendasController extends Controller{
    
   public function index(){
       $dados["view"]="Vendas/form_venda";
       $this->load("template",$dados);
   }
   
}