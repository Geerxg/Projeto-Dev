<?php

namespace App\Classes;

class Carro {
    public $nome = "teste";
    protected $cor;

    public function acelerar()
    {
        echo 'Acelerando!!!'.' o carro '.$this->nome;
    }
}
