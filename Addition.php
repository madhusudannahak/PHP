<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" id="num1" name="num1" required><br>
        <input type="text" id="num2" name="num2" required><br>
        <input type="submit" value="submit" id="submit" name="submit">
    </form>

    <?php
     if(isset($_POST['submit']) && isset($_POST['num1']) && isset($_POST['num2'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $num1=floatval($num1);
        $num2=floatval($num2);
        $sum=$num1+$num2;
        echo "<h2>result:</h2>";
        echo "<p>Addition of Number $num1 and $num2 is: $sum</p>";
     }
    ?>
</body>
</html>


