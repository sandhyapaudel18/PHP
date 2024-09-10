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
    

        if(isset($_POST['Refresh']))
        {
            
        }
    ?>
