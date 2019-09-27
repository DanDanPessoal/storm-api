<?php

    class conexao{
        
        var $cr;
        function conectar(){

            $this->cr = new mysqli("localhost", "root", "usbw", "storm-db");

            if($this->cr->connect_error){

                die("Erro de conexão com o banco<br/>".$this->cr->connect_error);

            } else{

                echo("<br/>Conectado com sucesso parsa, liberdade canto");


            }
        }
    }

?>