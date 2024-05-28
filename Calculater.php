<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operation</title>
    <script>
        function clearResult() {
            document.getElementById('result').innerHTML = "";
        }
    </script>
</head>
<body>
    <center> 
        <form method="post">
            <h1>Perform Arithmetic Operation:</h1><br><br>
            <h2>
                Enter first number: <input type="number" id="num1" name="num1" required oninput="clearResult()" autocomplete="off"><br><br>
                Enter second number: <input type="number" id="num2" name="num2" required oninput="clearResult()" autocomplete="off"><br><br>
                Select operation: 
                 <select id="operator" name="operator">
                    <option value="+">Addition</option>
                    <option value="-">Substraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                 </select><br><br>
                <input type="submit" value="Calculate" id="submit">
            </h2>
        </form>
         <div id="result">
        <?php
           if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $operator=$_POST['operator'];

            if(is_numeric($num1) && is_numeric($num2)){
                switch($operator){
                    case '+':
                        $result=$num1+$num2;
                        echo "<h1>Result</h1>";
                        echo "<h2>Your addition of $num1 and $num2 is :$result</h2>";
                        break;
                    case '-':
                        $result=$num1-$num2;
                        echo "<h1>Result</h1>";
                        echo "<h2>Your Substraction of $num1 and $num2 is :$result</h2>";
                        break;
                    case '*':
                        $result=$num1*$num2;
                        echo "<h1>Result</h1>";
                        echo "<h2>Your Multiplication of $num1 and $num2 is :$result</h2>";
                        break;
                    case '/':
                        $result=$num1/$num2;
                        echo "<h1>Result</h1>";
                        echo "<h2>Your division of $num1 and $num2 is :$result</h2>";
                        break;
                    default :
                     echo " <h2>Error: Invalid input</h2>";
                }
            }
            else{
                echo "<h2>Error: Please enter valid numeric values.</h2>";
            }
           }
        ?>
        </div>
    </center>

     </body>
</html>
