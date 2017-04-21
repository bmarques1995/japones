<?php

    include_once('conexao.php');

    if(filter_has_var(1,"val")){
        $sim = filter_input(1,"sim",515);
        $val = filter_input(1,"val",519);
    }

    $db = new DB("kanji");
    $db->setCols("ideograma");
    $db->setTabela("simbolo");
    $db->setParam("where ideograma = '".$sim."'");
    $val = $db->query_selecao();
    if($val==null)
        printf("0");
    else
        printf("1");
?>