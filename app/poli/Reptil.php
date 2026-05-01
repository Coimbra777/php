<?php

require_once "Animal.php";

class Reptil extends Animal
{
    protected string $corEscama;

    public function emitirSom(): void
    {
        echo "Som de réptil";
    }

    public function locomover(): void
    {
        echo "Rastejando";
    }

    public function alimentar(): void
    {
        echo "Comendo vegetais";
    }

    public function getCorEscama(string $corEscama): void
    {
        echo "Cor da escama: {$corEscama}";
    }
}
