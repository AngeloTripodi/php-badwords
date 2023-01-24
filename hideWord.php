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
        <h1>
            <?php
            echo $_GET['paragraph'] . ' ||' . ' il paagrafo è lungo: ' . strlen($_GET['paragraph']) . ' caratteri.';
            echo str_replace($_GET['hide'], '***', $_GET['paragraph']) . ' il paagrafo è lungo: ' . strlen($_GET['paragraph']) . ' caratteri.';
            ?>
        </h1>

    </main>

</body>

</html>