<!DOCTYPE html>
<html>
    <head>
        <title>Calculator Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <style>
        body {
            margin: 5em;
        }
        h1 {
            margin-top: 1em;
            margin-bottom: 1em;
            text-decoration: underline dotted;
        }
        p.vysledek {
            font-size: 2em;
        }
    </style>
    </head>
    <body>
        <div class="container">
        
        <h1>Výsledek</h1>

        <p class="vysledek">
        <?php 
            $operand1 = $_POST['operand1'];
            $operand2 = $_POST['operand2'];
            $operator = $_POST['operator'];
            
            if ($operator == "plus") {
                echo $operand1 + $operand2;
            } else if($operator == "minus") {
                echo $operand1 - $operand2;
            }
        ?>
        </p>

        </div>

    </body>
</html>