<?php require_once 'calculadora.class.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: #3b5fa7;
        }

        header{
            color: #b1caff;
        }

        header span{
            color: whitesmoke;
        }

        label{
            font-size: 18px;
            color: #b1caff;
        }

        input{
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        select{
            padding: 7px;
            margin: 10px;
            border: none;
            border-radius: 15px;
            margin-bottom: 60px;
        }

        #btn{
            padding: 8px 30px;
            background-color: #b1caff;
            color: #0a152b;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <header>
        <h1> Calculadora <span>PHP</span></h1>
    </header>

    <section>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <input type="number" name="num2" placeholder="Número 2" required>
            <br>
            <select name="operacao" id="">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <br>
            <button id="btn" type="submit" name="calcular">Calcular</button>
        </form>
    </section>

    <?php 
    if(isset($_POST['calcular'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];

        $calculo = new Calculadora($num1, $num2);

        if($operacao == 'soma'){
            $resultado = $calculo->soma();
        } elseif($operacao == 'subtracao'){
            $resultado = $calculo->subtracao();
        } elseif($operacao == 'multiplicacao'){
            $resultado = $calculo->multiplicacao();
        } elseif($operacao == 'divisao'){
            $resultado = $calculo->divisao();
        }

        echo "<h2 style = 'margin-top: 20px; color: #bfcdeb'>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>