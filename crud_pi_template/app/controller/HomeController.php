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
        echo "Executou a action home!";
    }

}

//Criar o objeto da classe HomeController
new HomeController();