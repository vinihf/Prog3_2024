<?php
    
    $linguagem = "PHP";

    echo "Vamos trabalhar com a linguagem {$linguagem}";

    echo "<hr>";
    
    //Forma 1 de criar array
    $linguagens = array("Python","Java","HTML", "CSS", "Javascript","PHP");

    //Forma 2 de criar array
    $linguagens2 = ["Python","Java","HTML", "CSS", "Javascript","PHP"];

    //Forma 3 de criar array
    $linguagens3 = ["1 ano" => "Python", "2 ano" => "Java", "3 ano" => ["HTML", "CSS", "Javascript","PHP"]];

    var_dump($linguagens);
    echo "<hr>";
    var_dump($linguagens2);
    echo "<hr>";
    var_dump($linguagens3);
    echo "<hr>";

    for($i=0;$i<count($linguagens);$i++){
        echo $linguagens[$i]."<br>";
    }
    
    echo "<hr>";

    foreach($linguagens2 as $lang){
        echo $lang;
    }

    
?>