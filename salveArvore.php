<?php 


    function arvoresSalvas(){

date_default_timezone_set("America/Recife");     
$data_nascimento = '2017-08-01';
$data_acompanhamento_calculo = date('Y/m/d');


$date = new DateTime($data_nascimento); // Data de Nascimento
$idade_acompanhamento = $date->diff(new DateTime($data_acompanhamento_calculo)); // Data do Acompanhamento
$idade_acompanhamento_mostra_anos = $idade_acompanhamento->format('%Y')*12;
$idade_acompanhamento_mostra_meses = $idade_acompanhamento->format('%m');


$total_meses = $idade_acompanhamento_mostra_anos+$idade_acompanhamento_mostra_meses;

        
    return $total_meses * 2;
        
    }
?>