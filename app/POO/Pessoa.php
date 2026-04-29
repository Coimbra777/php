<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $sexo;

    public function __construct(string $nome, int $idade, string $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
    }

    public function fazerAniversario()
    {
        $this->idade++;
    }
}
