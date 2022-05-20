<?php

interface PreVenda
{
    public function getNumero();
    public function getTotal();
}

interface PreVendaComReserva extends PreVenda
{
    public function reservaEstoque();
}

class Pedido implements PreVendaComReserva
{
    private $numero;
    public $tipoDoc = "pedido";

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getTotal(){
        return 10;
    }

    public function reservaEstoque()
    {
        echo "Estoque reservado!!!";
    }
}

class Orcamento implements PreVenda
{
    public $numero;
    public $tipoDoc = "orcamento";

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getTotal(){
        return 18;
    }
}

class Venda
{
    private $documento;
    public function __construct(PreVenda $documento)
    {
        $this->documento = $documento;
    }

    public function informacaoPedido()
    {
        echo "Nro. do ".$this->documento->tipoDoc." ".$this->documento->getNumero();
    }
}

$pedido = new Pedido(45);
$orcamento = new Orcamento(89);
echo "Venda 1: \n";
$venda = new Venda($pedido);
$venda->informacaoPedido();
echo "\nVenda 2: \n";
$venda2 = new Venda($orcamento);
$venda2->informacaoPedido();



//- Metodos Contrutores; ok
//- Interfaces; ok
//- DI (Dependency Injection); ok
//- SRP (Princípio da responsabilidade única); ok
//- OCP (Princípio Aberto-Fechado);
//- DIP (Dependency Inversion Principle); ok
//- ISP (Interface Segregation Principle); ok
