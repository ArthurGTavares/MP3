<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Style.css">
        <title>MP3</title>
    </head>
    <body class="fundo">
        <div class="container">
            <?php
                include_once 'Helpers.php';

                if (isset($_GET['page'])){
                    if(file_exists("pages/{$_GET['page']}.php")){
                        include_once "pages/{$_GET['page']}.php";
                    } else {
                        include_once 'pages/Error404.php';
                    } 
                } else {
                        include_once 'pages/Albuns.php';
                }   
            ?>    
        </div>
    </body>
</html>