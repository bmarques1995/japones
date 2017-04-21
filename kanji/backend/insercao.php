<?php
    include_once("conexao.php");
    if(filter_has_var(0,"val")){
        $sim = filter_input(0,"sim");
        $val = filter_input(0,"val");
    }
    $db = new DB("kanji","simbolo");
    $db->setSim($sim);
    $db->query_insercao();
    $erro = $db->getErro();
    if(!$erro)
        printf("1");
    else
        printf("0");
?>