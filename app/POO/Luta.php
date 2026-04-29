<?php

require_once "Lutador.php";

class Luta
{
    // Atributos
    private Lutador $desafiante;
    private Lutador $desafiado;
    private int $rounds;
    private bool $aprovada;

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setDesafiante(Lutador $desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function setDesafiado(Lutador $desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function setRounds(int $rounds)
    {
        $this->rounds = $rounds;
    }

    public function setAprovada(bool $aprovada)
    {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta(Lutador $l1, Lutador $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
        } else {
            $this->setAprovada(false);
            echo "<p>Luta não aprovada</p>";
            return false;
        }

        return true;
    }

    public function lutar()
    {
        if ($this->getAprovada()) {
            echo "<p>Luta aprovada</p>";
            $this->getDesafiante()->apresentar();
            $this->getDesafiado()->apresentar();
            $vencedor = rand(0, 2);
            echo "<p>Vencedor: {$vencedor}</p>";
            switch ($vencedor) {
                case 0:
                    // Empate
                    echo "<p>Empate!</p>";
                    $this->getDesafiante()->empatarLuta();
                    $this->getDesafiado()->empatarLuta();
                    break;
                case 1:
                    // Desafiado vence
                    echo "<p>{$this->getDesafiado()->getNome()} venceu!</p>";
                    $this->getDesafiante()->perderLuta();
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->status();
                    $this->getDesafiado()->status();
                    break;
                case 2:
                    // Desafiante vence
                    echo "<p>{$this->getDesafiante()->getNome()} venceu!</p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->status();
                    $this->getDesafiado()->status();
                    break;
            }
        } else {
            return false;
        }
    }
}
