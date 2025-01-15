<!DOCTYPE html>
<html>
    <head>
        <title>PHP Uppercase Result</title>
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
        
        <h1>Uppercase Result</h1>

        <p class="vysledek">
        <?php 
            // Nacteme hodnotu "uptext" (viz formular) do promenne "old"
            $old = $_POST['uptext'];
            
            if (str_contains($old, "Ahoj")) {
                // Pokud text obsahuje "Ahoj", tak nahradime "Martin" pomoci "Nitram"
                $old = str_replace("Martin", "Nitram", $old);
            }

            $up = strtoupper($old);
            echo "<strong>$old</strong> ⮕ <strong>$up</strong>";
        ?>
        </p>

        </div>

    </body>
</html>