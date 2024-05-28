<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
    <form method="post">
        <h1>Check YOur Eligible for Vote:</h1><br><br>
        <h2>
            Enter your Age:<input type="number" id="num" name="num"><br>
            <input type="submit" value="Check" id="submit">
        </h2>
    </form>

    <?php
        if(isset($_POST['num'])) {
            $num=$_POST['num'];

            $num=floatval($num);

            if($num >=18 ){
                echo "<h1>you are Eligible For Vote:</h1>";
            }

            else{
                echo "<h1>Sorry you not eligible for Vote Because Your Age Is:$num</h1>";
            }

        }
    ?>
</body>
</html>