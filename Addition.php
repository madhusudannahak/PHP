 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="post">
        <h2>
            Enter 1st NO: &nbsp;<input type="text" id="no1" name="no1" autocomplete="off" required ><br>
            Enter 2st NO: &nbsp;<input type="text" id="no2" name="no2" autocomplete="off" required><br>
            <input type ="submit" value="submit" id="submit">
        </h2>
    </form>

    <?php
    if(isset($_POST['no1']) && isset($_POST['no2'])){
        $no1=$_POST['no1'];
        $no2=$_POST['no2'];

        $no1=floatval($no1);
        $no2=floatval($no2);

        $sum=$no1+$no2;

        echo "<h2>Result</h2>";
        echo "<p>Addition of Number $no1 and $no2 is :$sum</p>";

    }

    ?>
 </body>
 </html>