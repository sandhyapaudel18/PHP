<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <body>
    <h4>Calculator</h4>
    <form method="post">
      <label for="num1">Enter number X</label>
      <input type="text" name="x" required /><br /><br />

      <label for="num2">Enter number Y</label>
      <input type="text" name="y"required /><br /><br />

      <label for="operator">Select the Operator:</label>
      <select name="operator" id="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option></select><br /><br />

      <input type="submit" value="Calculate" />
      <input type="submit" value="Refresh"/>
      
    </form>

    <?php
        $X = $_POST["x"];
        $Y = $_POST["y"];
        $operator = $_POST["operator"];


        switch ($operator) {
            case '+':
                $result = $X+ $Y;
                echo "Addition result: " . $result;
                break;
            case '-':
                $result = $X - $Y;
                echo "Subtraction result: " . $result;
                break;
            case '*':
                $result = $X * $Y;
                echo "Multiplication result: " . $result;
                break;
            case '/':
                    $result = $num1 / $num2;
                    echo "Division result: " . $result;
                break;
            default:
                echo "Invalid operator";
        }
    
    ?>
  </body>
</html>
