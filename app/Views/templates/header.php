<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bcded251a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Bienvenido a la página.</title>
    <style>
        body{
            background-color: black;
            color: whitesmoke;
            font-family: Helvetica,sans-serif;
        },
        .titulo{
            font-size: 300px;
        }
    </style>
</head>
<body>
    <div class="titulo"><?= strtoupper(esc($titulo)) ?></div>