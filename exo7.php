<?php

$show = true; 

if ($show == true) {
    $display = '
    <div id="bloc">
        <p>Je suis le bloc visible</p>
    </div>
    '
    ;
} elseif ($show == false) {
    $display = "<p>Le bloc est caché</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 7</title>
    <style>
        #bloc {
            background:#000;
            color:#fff;
            width:50%;
            padding:15px;
            font-family:arial;
        }
    </style>

</head>
<body>
<div class="container">
<?php echo "$display" ?>
</div>
</body>
</html>