<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $sexo;

    public function fazerAniversario(int $idade): void
    {
        $this->idade = $idade;
        echo "Feliz aniversário! Você agora tem {$this->idade} anos.";
        echo "<br>";
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }
}
