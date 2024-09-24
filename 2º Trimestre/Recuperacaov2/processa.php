<?php
    echo "Consumo: {$_POST['consumo']}";
    echo "<br>";
    echo "Quantidade de pessoas: {$_POST['qtd']}";
    echo "<br>";
    
    if(isset($_POST['taxa'])){
        echo "Taxa de serviço: SIM";
        echo "<br>";
    }else{
        echo "Taxa de serviço: NÃO";
        echo "<br>";
    }


    if(isset($_POST['couvert'])){
        echo "Couvert: SIM";
        echo "<br>";
    }else{
        echo "Couvert: NÃO";
        echo "<br>";
    }
    echo "Gorjeta: {$_POST['gorjeta']}";
?>
