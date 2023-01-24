<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <p>
            <?php
            $beforeHide = $_GET['paragraph'];
            echo $beforeHide;
            ?>
        </p>

        <p>
            La stringa contiene:
            <?php
            echo strlen($beforeHide);
            ?>
            caretteri.
        </p>
        <hr>
        <h1>
            <?php
            $afterHide = str_replace($_GET['hide'], '***', $_GET['paragraph']);
            echo $afterHide;
            ?>
        </h1>
        <h1>
            La stringa contiene:
            <?php
            echo strlen($afterHide);
            ?>
            caretteri.
        </h1>

    </main>

</body>

</html>