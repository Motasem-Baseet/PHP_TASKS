<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function conditions($a){
        switch ($a){
            case "red":
                echo("the color is red");
                break;
            case "blue":
                echo("the color is blue");
                break;
        }
    }

    
    conditions("red")
    ?>
</body>
</html>