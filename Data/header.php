<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gulles dagbog</title>
    <link href="./css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./css/burger.css">
    <link rel="stylesheet" type="text/css" href="./css/img.css">

</head>
<body>
    <nav class="navigation">


          
            <ul>
                <?php
                $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
                
                if ($file == "index")
                    echo '<li><a class="active" href="index.php">Hjem</a></li>';
                else
                    echo '<li><a href="index.php">Hjem</a></li>';
                if ($file == "billede")
                    echo '<li><a class="active" href="billede.php">Billede</a></li>';
                else
                    echo '<li><a href="billede.php">Billede</a></li>';
                if ($file == "nedtælling")
                    echo '<li><a class="active" href="nedtælling.php">Nedtælling</a></li>';
                else
                    echo '<li><a href="nedtælling.php">Nedtælling</a></li>';
                if ($file == "studietur")
                    echo '<li><a class="active" href="studietur.php">Studietur</a></li>';
                else
                    echo '<li><a href="studietur.php">Studietur</a></li>';   
                ?>           
            </ul>
        </div>
    </nav>

