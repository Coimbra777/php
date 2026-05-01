<?php

require_once "Animal.php";

class Ave extends Animal
{
    protected string $corPena;

    public function emitirSom(): void
    {
        echo "Som de ave";
    }

    public function locomover(): void
    {
        echo "Voando";
    }

    public function alimentar(): void
    {
        echo "Comendo frutas";
    }

    public function fazerNinho(): void
    {
        echo "Construindo ninho";
    }

    public function getCorPena(): string
    {
        return $this->corPena;
    }

    public function setCorPena(string $corPena): void
    {
        $this->corPena = $corPena;
    }
}
