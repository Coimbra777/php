<?php

require_once "Pessoa.php";

class Aluno extends Pessoa
{
    private string $matricula;
    private string $curso;

    public function pagarMensalidade(): void
    {
        echo "Mensalidade paga com sucesso para o aluno: {$this->nome}";
        echo "</br>";
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }
}
