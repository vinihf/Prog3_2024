<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($_COOKIE['cor'])){
        echo "<style> body{ background-color: {$_COOKIE['cor']}; </style>"; 
    }else{
        echo "<style> body{ background-color: white; </style>";
    }
?>
</head>
<body>
    <h1>Escolha a cor da página</h1>
    <form method=post action='defineCor.php'>
        <button name='botao' value='blue'>Azul</button>
        <button name='botao' value='black'>Preto</button>
    </form>
    
</body>
</html>
 