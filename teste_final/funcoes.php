<?php
//VERIFICAR SE A FUNÇÃO EXISTE
if (!function_exists("seguranca_dados")){
    function seguranca_dados($dados){
        $dados = trim($dados);              //trim remove espaços
        $dados = stripslashes($dados);      //remove os backslashes 
        $dados = htmlspecialchars($dados); //remove os chars especiais
        return $dados;
    }
}
