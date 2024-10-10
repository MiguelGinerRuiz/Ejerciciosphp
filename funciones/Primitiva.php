<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromillones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .numbers{
            display: flex;
            justify-content: center;
            margin: 10px 0;
        }
        .number{
            background-color: #007bff;
            color: white;
            font-size: 24px;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: 0 5px;
        }
        .star {
            background-color: gold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Números de la Primitiva</h1>
        <div class="numbers">
<?php

function primitiva(){
    $num = [];

    while(count($num) <= 5){
        $nuevoNumero = rand(1, 50);
        

        if(!in_array($nuevoNumero, $num)){
            $num[] = $nuevoNumero;
        }
    }
    foreach($num as $numero){
        echo "<div class='number'>$numero</div>";
    }
}

primitiva();
?>
 </div>
    </div>
</body>
</html>