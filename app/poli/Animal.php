<?php

abstract class Animal
{
    protected string $peso;
    protected int $idade;
    protected int $membros;

    abstract function locomover(): void;
    abstract function alimentar(): void;
    abstract function emitirSom(): void;

    public function getPeso(): string
    {
        return $this->peso;
    }

    public function setPeso(string $peso): void
    {
        $this->peso = $peso;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function getMembros(): int
    {
        return $this->membros;
    }

    public function setMembros(int $membros): void
    {
        $this->membros = $membros;
    }
}
