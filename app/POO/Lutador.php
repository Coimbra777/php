<?php

class Lutador
{
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    public function __construct(
        string $nome,
        string $nacionalidade,
        int $idade,
        float $altura,
        float $peso,
        int $vitorias,
        int $derrotas,
        int $empates
    ) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getPeso()
    {
        $this->setCategoria($this->peso);
        return $this->peso;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setNacionalidade(string $nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }

    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    public function setVitorias(int $vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas(int $derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function setEmpates(int $empates)
    {
        $this->empates = $empates;
    }

    public function getCategoria()
    {
        $this->setCategoria($this->peso);
        return $this->categoria;
    }

    public function setCategoria(float $peso)
    {
        if ($peso < 52.2) {
            $this->categoria = "Invalido";
        } elseif ($peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }

        return $this->categoria;
    }

    public function apresentar()
    {
        echo "<pre>";
        echo "Lutador: {$this->getNome()} / Categoria: {$this->getCategoria()} / Nacionalidade: {$this->getNacionalidade()} / Idade: {$this->getIdade()} / Altura: {$this->getAltura()} / Peso: {$this->getPeso()} / Vitorias: {$this->getVitorias()} / Derrotas: {$this->getDerrotas()} / Empates: {$this->getEmpates()}";
        echo "</pre>";
        echo "<br>";
    }

    public function status()
    {
        echo "<pre>";
        echo "Lutador: {$this->getNome()} / Categoria: {$this->getCategoria()} / Nacionalidade: {$this->getNacionalidade()} / Idade: {$this->getIdade()} / Altura: {$this->getAltura()} / Peso: {$this->getPeso()} / Vitorias: {$this->getVitorias()} / Derrotas: {$this->getDerrotas()} / Empates: {$this->getEmpates()}";
        echo "</pre>";
        echo "<br>";
    }

    public function ganharLuta()
    {
        $this->vitorias++;
    }

    public function perderLuta()
    {
        $this->derrotas++;
    }

    public function empatarLuta()
    {
        $this->empates++;
    }
}
