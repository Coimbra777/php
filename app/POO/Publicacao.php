<?php

interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear(int $p);
    public function avançarPagina();
    public function voltarPagina();
}
