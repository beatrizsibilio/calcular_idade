<?php
    date_default_timezone_set('America/Sao_Paulo');

    $nome = $_GET['nome'];
    $nasc = $_GET['nasc'];
    
    function calcularIdade($nasc){
        $data_nascimento = new DateTime($nasc);
        $data_atual = new DateTime();

        $idade = $data_atual->diff($data_nascimento);
        return $idade->format('%Y anos, %M meses, %D dias e %h horas'); 
    }
    $idade = calcularIdade($nasc);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercícios 1 e 2 PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        #dados{
            border: solid black 2px;
            padding: 20px;
            margin-bottom: 20px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h1>Coleta de Dados</h1>
                <form action="" method="" id="dados">
                    Nome: <input type="text" name="nome"><br>
                    Nascimento: <input type="date" name="nasc"><br>
                    <input type="submit" value="enviar">
                </form>
                <h2>Mostrando dados</h2>
                Seu nome é <?php echo $nome?>, vc tem <?php echo $idade?>
            </div>
        </div>
    </div>
</body>
</html>