<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação</title>
</head>
<body>
    <form action='index.php' method='post'>
        <div class='group'>
            <label for='consumo'>Valpor do Consumo*:</label>
            <input type=number id='consumo' name='consumo' required>
        </div>
        <div class='group'>
            <label for='qtd'>Número de Pessoas*:</label>
            <input type=number id='consumo' name='qtd' required>
        </div>
        <div class='group'>
            <input type=checkbox name='couvert' value='couvert'>Couvert Artístico
            <input type=checkbox name='taxa' value='taxa'>Taxa de Serviço
        </div>
        <div class='group'>
            <label for='gorjeta'>Gorjeta*:</label>
            <input type=number id='gorjeta' name='gorjeta' required>
        </div>
        <input type='submit' name='botao' value='Calcular'>
    </form>
    <?php
        if(isset($_POST['consumo'])){
            $consumo = $_POST['consumo'];
            if(isset($_POST['taxa'])){
                $consumo+=0.1*$consumo;
            }
            if(isset($_POST['couvert'])){
                $consumo+=10*$_POST['qtd'];
            }
            $valorDividido = ($consumo+$_POST['gorjeta'])/$_POST['qtd'];
            echo "Valor para cada uma das {$_POST['qtd']} pessoas: R$ {$valorDividido}";
        }else{
            echo "Valor para cada uma das pessoas";
        }
    ?>
</body>
</html>