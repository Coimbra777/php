<?php

require_once "Aluno.php";

class Bolsista extends Aluno
{
    private float $bolsa;

    public function renovarBolsa(): void
    {
        echo "Bolsa renovada com sucesso para o aluno: {$this->nome}";
        echo "</br>";
    }

    public function getBolsa(): float
    {
        return $this->bolsa;
    }

    public function setBolsa(float $bolsa): void
    {
        $this->bolsa = $bolsa;
    }

    public function pagarMensalidade(): void
    {
        echo "{$this->nome} é bolsista! ";
        echo "Pagando com desconto de {$this->bolsa}%";
        echo "</br>";
    }
}
