<?php

class ContaBanco
{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos especiais
    public function __construct() {}

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    // Métodos
    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "Conta não pode ser fechada porque ainda tem saldo";
        } elseif ($this->getSaldo() < 0) {
            echo "Conta não pode ser fechada porque tem débito";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "Conta fechada";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "Saldo insuficiente";
            }
        } else {
            echo "Conta fechada";
        }
    }

    public function pagarMensal($valor)
    {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "Conta fechada";
        }
    }
}
