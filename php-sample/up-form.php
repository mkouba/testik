<!DOCTYPE html>
<html>
    <head>
        <title>PHP Uppercase Form</title>
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
    </style>
    </head>
    <body>
        <div class="container">
        
        <h1>Uppercase form</h1>
      
        <form action="up-action.php" method="post">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="text" class="form-control" name="uptext" placeholder="text">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Na velká písmena</button>
                </div>
            </div>
        </form>

        </div>

    </body>
</html>