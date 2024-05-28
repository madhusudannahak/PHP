<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <script>
        function clearResult() {
            document.getElementById('result').innerHTML = "";
        }
    </script>
</head>
<body>
    <center>
        <form method="post">
            <h1>Check If a Number is Even or Odd:</h1><br><br>
            <h2>
                Enter a number: <input type="number" id="number" name="number" required oninput="clearResult()"><br><br>
                <input type="submit" value="Check" id="submit">
            </h2>
        </form>

        <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            do {
                $number = $_POST['number'];
                $validInput = is_numeric($number);

                if (!$validInput) {
                    echo "<h2>Error: Please enter a valid number.</h2>";
                    break;
                }

                $number = intval($number);

                if ($number % 2 == 0) {
                    echo "<h1>Result</h1>";
                    echo "<h2>The number $number is even.</h2>";
                } else {
                    echo "<h1>Result</h1>";
                    echo "<h2>The number $number is odd.</h2>";
                }
            } while (!$validInput);
        }
        ?>
        </div>
    </center>
</body>
</html>
