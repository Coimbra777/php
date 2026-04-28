<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Não posso rabiscar";
        } else {
            echo "Posso rabiscar";
        }
    }

    private function tampar()
    {
        $this->tampada = true;
    }

    private function destampar()
    {
        $this->tampada = false;
    }
}
