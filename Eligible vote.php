<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility Check</title>
    <script>
        function clearResult() {
            document.getElementById('result').innerHTML = "";
        }
    </script>
</head>
<body>
    <center> 
        <form method="post">
            <h1>Check Your Eligibility for Voting:</h1><br><br>
            <h2>
                Enter your Age: <input type="number" id="num" name="num" required oninput="clearResult()"><br><br>
                <input type="submit" value="Check" id="submit">
            </h2>
        </form>
        
    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['num'])) {
                $num = $_POST['num'];

                if (is_numeric($num)) {
                    $num = intval($num);
                    if ($num >= 18) {
                        echo "<h1>You are eligible to vote.</h1>";
                    } else {
                        echo "<h1>Sorry, you are not eligible to vote because your age is: $num</h1>";
                    }
                } else {
                    echo "<h1>Please enter a valid age.</h1>";
                }
            }
        }
        ?>
    </div>
    </center>
</body>
</html>
