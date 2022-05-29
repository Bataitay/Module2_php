<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="test" name="search">
        <input type="test" name="search1">
        <select name="Calculator" id="">
            <option value="add">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="submit" id="submit" value="send">

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $search = $_REQUEST['search'];
        $search1 = $_REQUEST['search1'];
        $Calculator = $_REQUEST['Calculator'];  
        $result = "";
        $warning = "";
            switch ($Calculator) {
                case ($search==null || $search1==null):
                    $result =  'let is enter number';
                    break;
                case 'add':
                    $result = $search + $search1;
                    break;
                case 'subtraction':
                    $result = $search - $search1;
                    break;
                case 'multiplication':
                    $result = $search * $search1;
                    break;
                case 'division':
                    $result = $search / $search1;
                    break;
                
            }
            echo $result;
        }
    ?>

</body>

</html>