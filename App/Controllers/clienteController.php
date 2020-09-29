<?php
session_start();

namespace App\Controllers;
use Core\Controller;
use App\Models\Cliente;

class ClienteController extends Controller {
    
    public function login() {
        $cliente = Cliente::getAll();
        $this->view('cliente', ['cliente' => $cliente]);
    }

    public function funcionaporfavor(){
        echo"ALEGRIA";
    }
}
?>