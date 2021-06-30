<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .tablalistado{
            border-collapse: collapse;
            box-shadow: 0px 0px 10px #000;
            margin: 15px;
        }
        .tablalistado th{
            background-color: #22d710;
            padding: 10px;
            border: 2px solid #000;
        }
        .tablalistado td{
            background-color: #7bde71;
            padding: 10px;
            border: 2px solid #000;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Artículos</title>
</head>
<body>

    <?php 
        echo "<div class='text-center d-flex justify-content-center mt-3'>";
        echo '<table class="tablalistado">';
        echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th></tr>';
        for($i = 0; $i < count($datos); $i++){
            echo '<tr>';
            echo '<td>';
            echo $datos[$i]['Codigo'];
            echo '</td>';
            echo '<td>';
            echo $datos[$i]['Descripcion'];
            echo '</td>';
            echo '<td>';
            echo $datos[$i]['Precio'];
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    ?>
</body>
</html>