<?php

class Caneta
{
    public $modelo;
    private $ponta;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function getPonta()
    {
        return $this->ponta;
    }
}
