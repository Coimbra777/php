<?php

require_once "Animal.php";

class Peixe extends Animal
{
    protected string $corEscama;

    public function emitirSom(): void
    {
        echo "Som de peixe";
    }

    public function locomover(): void
    {
        echo "Nadando";
    }

    public function alimentar(): void
    {
        echo "Comendo substâncias";
    }

    public function soltarBolha(): void
    {
        echo "Soltando bolha";
    }

    public function getCorEscama(): string
    {
        return $this->corEscama;
    }

    public function setCorEscama(string $corEscama): void
    {
        $this->corEscama = $corEscama;
    }
}
