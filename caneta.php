<?php

    class Caneta {

        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;


        function Rabiscar(){
            if($this->tampada  == true){
                echo "<p>Não é possivel escrever</p>";
            } else {
                echo "<p>Estou rabiscado</p>";

            }

        }

        function Tampar() {
            $this->tampada == true;

        }

        function Destampar() {
            $this->tampada == false
            ;

        }


    }











