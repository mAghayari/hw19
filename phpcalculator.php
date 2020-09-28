<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Document</title>
</head>

<body>
    <br><br><br><br>
    <?php
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $operator = $_GET['operation'];

    $result = 0;
    if (isset($_GET['calculate'])) {
        switch ($operator) {
            case 'addition':
                $result += $number1 + $number2;
                break;
            case 'subtraction':
                $result +=  $number1 - $number2;
                break;
            case 'multiplication':
                $result +=  ($number1 * $number2);
                break;
            case 'division':
                if ($number2 != 0)
                    $result += $number1 / $number2;
                else {
                    echo "<p style=\"font-size:40px;\">division by zero Error";
                    return;
                }
                break;
        }
        echo "<p style=\"font-size:40px;\">The Result is: " . $result . "</p>";
    }
    ?>