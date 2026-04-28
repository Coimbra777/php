<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    var $status;

    function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Não posso rabiscar";
        } else {
            echo "Posso rabiscar";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}
