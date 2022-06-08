<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="shapes.svg" type="image/x-icon">
</head>

<body>
    <div align="center" id="container"><br>

        <div id="content">
            <br>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 60);
                ?>
            </button>
        </div>

        <div id="content">
            <br>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 80);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 80);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 80);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 80);
                ?>
            </button>
            <button type="button" class="btn btn-success style">
                <?php
                echo rand(1, 80);
                ?>
            </button>
        </div>

        <br>
        <button class="btn btn-outline-success" type="button" onClick="window.location.reload();">Atualizar</button>
    </div>

</body>

</html>