<?php

require_once "Pessoa.php";

class Aluno extends Pessoa
{
    private string $matricula;
    private string $curso;

    public function criarMatricula(): void
    {
        $this->matricula = "2026" . rand(10000000, 99999999);
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }
}
