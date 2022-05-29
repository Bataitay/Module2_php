<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            width: 300px;
            margin-left: 400px;
            border-radius: 10px;
        }

        .search input {
            height: 25px;
            width: 150px;
            float: right;
            margin-right: 30px;
        }
        .selectdiv  {
            position: relative;
            width: 150px;
            margin-left: 120px;
            margin-top: -20px;
        }
        select::-ms-expand {
            display: none;
        }

        .selectdiv:after {
            content: '<>';
            font: 17px "Consolas", monospace;
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            right: 11px;
            top: 7px;
            border-bottom: 1px solid #999;
            position: absolute;
            pointer-events: none;
        }

        .selectdiv select {
            appearance: none;
            display: block;
            width: 158px;
            height: 33px;
            float: right;
            padding: 0px 24px;
            font-size: 16px; 
            color: #333;
            background-color: #ffffff;
        }
        .calculate input {
            margin-left:112px;
            
        }
    </style>
</head>

<body>
<fieldset>
        <legend>Calculator</legend>
        <form action="" method="post">
    <div class="search">
        <label for="first">first Operand:</label>
        <input id="first" type="text" name="first" placeholder="how much i want?" required=""><br><br>
        <label>
            Operand:
        <div class="selectdiv">
                <select name="Calculate">
                    <option selected value="add"> addition </option>
                    <option value="subtraction">subtraction</option>
                    <option value="multiplication">multiplication</option>
                    <option value="division">division</option>
                </select>
            <br><br>
        </div>
    </label>
        <label for="second">second operand:</label>
        <input id="second" type="text" name="second" placeholder="how much i want?" required="">
    </div><br>
    <div class="calculate">
    <input type="submit" id="submit" value="Calculate">
    </div>
        </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_REQUEST['first'];
        $second = $_REQUEST['second'];
        $Calculate = $_REQUEST['Calculate'];  
        $result = "";
        $warning = "";
            switch ($Calculate) {
                case ($first==null || $second==null):
                    $result =  'let is enter number';
                    break;
                case 'add':
                    $result = $first + $second;
                    echo $first . '+' . $second . '=' .  $result;
                    break;
                case 'subtraction':
                    $result = $first - $second;
                    echo $first . '-' . $second . '=' .  $result;
                    break;
                case 'multiplication':
                    $result = $first * $second;
                    echo $first . 'x' . $second . '=' .  $result;
                    break;
                case 'division':
                    $result = $first / $second;
                    echo $first . ':' . $second . '=' .  $result;
                    break;
                
            }
            
        }
    ?>
    </fieldset>
</body>

</html>