<?php

    function imprime_saida($nome, $ra)
    {
        echo("<b>Nome =</b> ".$nome."<br>");
        echo("<b>Ra =</b> ".$ra."<br>");
    }


    $nome = $_POST["Nome"];
    $ra = $_POST["Ra"];

    imprime_saida($nome, $Ra);

?>