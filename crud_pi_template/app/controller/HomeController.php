<?php

require_once(__DIR__ . "/Controller.php");

class HomeController extends Controller {

    public function __construct() {
        //Testar se o usuário está logado
        if(! $this->usuarioLogado()) {
            exit;
        }

        $this->handleAction();       
    }

    protected function home() {
        $dados = array();
        $this->loadView("home/home.php", $dados);
    }

}

//Criar o objeto da classe HomeController
new HomeController();