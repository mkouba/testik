<!DOCTYPE html>
<html>
    <head>
        <title>PHP Hello World</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <style>
        body {
            margin: 5em;
        }
        h2 {
            margin-top: 1em;
        }
    </style>
    </head>
    <body>
        <div class="container">
        
        <h1>PHP Hello World</h1>

        <p><a href="https://www.php.net/docs.php" target="_blank">PHP dokumentace</a></p>
        
        <?php echo '<p>Ahoj svete!</p>'; ?>

        <div class="card">
            <div class="card-body">
                <code>
                docker run -d -p 8080:80 --name hello-php-app -v "$PWD"/php-sample:/var/www/html php:8.2-apache
                </code>
            </div>
        </div>

        <hr>

        <?php
            echo $_SERVER['HTTP_USER_AGENT'];
        ?>

        </div>

    </body>
</html>