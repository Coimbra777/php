<?php

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao
{
    private string $titulo;
    private string $autor;
    private int $totalPaginas;
    private int $paginaAtual;
    private bool $aberto;
    private Pessoa $leitor;

    public function __construct(string $titulo, string $autor, int $totalPaginas, Pessoa $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        return "Livro: {$this->titulo}, Autor: {$this->autor}, Total de Páginas: {$this->totalPaginas}, Página Atual: {$this->paginaAtual}, Aberto: {$this->aberto}, Leitor: {$this->leitor->getNome()}";
    }

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear(int $p)
    {
        if ($p > $this->totalPaginas) {
            $this->paginaAtual = $this->totalPaginas;
        } else {
            $this->paginaAtual = $p;
        }
    }

    public function avançarPagina()
    {
        $this->paginaAtual++;
        if ($this->paginaAtual > $this->totalPaginas) {
            $this->paginaAtual = $this->totalPaginas;
        }
    }

    public function voltarPagina()
    {
        $this->paginaAtual--;
        if ($this->paginaAtual < 0) {
            $this->paginaAtual = 0;
        }
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function setTotalPaginas(int $totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;
    }

    public function setPaginaAtual(int $paginaAtual)
    {
        $this->paginaAtual = $paginaAtual;
    }

    public function setAberto(bool $aberto)
    {
        $this->aberto = $aberto;
    }

    public function setLeitor(Pessoa $leitor)
    {
        $this->leitor = $leitor;
    }
}
