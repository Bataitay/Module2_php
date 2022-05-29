<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="number">enter 1 number:</label>
        <input id="number" type="text" name="number" required="">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_REQUEST['number'];
        $result = 0;
        $dem = 0;
        $i = 2;
        if ($number < 2) {
            echo "this is not primre";
        }
        while ($dem < $number) {
            $sum = 0;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $sum++;
                }
            }
            if ($sum == 0) {
                echo  $i  . '<br>';
                $dem++;
            }
            $i++;
        }
    
    }
    ?>
</body>

</html>