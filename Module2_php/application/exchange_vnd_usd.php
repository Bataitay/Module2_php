<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            width: 400px;
            margin-left: 400px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        form {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <fieldset>
        <h1>exchange money</h1>
        <form action="" method="post">
            <input id="search" type="text" name="searchs" placeholder="would you like exchange money?">
            <select name="select1">
                <option name="usd" value="usd">usd</option>
                <option name="vnd" value="vnd">vnd</option>
            </select>
            <select name="select2">
                <option name="vnd" value="vnd">vnd</option>
                <option name="usd" value="usd">usd</option>
            </select>
            <input type="submit" id="submit" value="exchange">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $searchs = $_REQUEST['searchs'];
            // $usd = $_REQUEST['usd'];
            // $vnd = $_REQUEST['vnd'];
            $result = "";
            $select1 = $_REQUEST['select1'];
            $select2 = $_REQUEST['select2'];

            switch ($select1) {
                case ($searchs == null):
                    $result = ' please enter money search';
                    break;
                case $select1 =="usd" && $select2 == 'vnd':
                    $result = $searchs * 23000 .' vnd';
                    break;

                case $select1 == 'vnd' && $select2 == 'usd':
                    $result = $searchs / 23000 .' usd';
                    break;
                
            } 
        }
        echo $result;
        ?>
</body>

</html>