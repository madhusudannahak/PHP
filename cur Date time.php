<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
     echo "<h1>Display in Current Date and Time</h1>";
     echo "<br>";

     $curdate=date('d-m-y h:i:s');

     echo "$curdate";
    ?>
    </center>
</body>
</html>