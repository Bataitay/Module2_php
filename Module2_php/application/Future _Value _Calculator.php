<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width:300px ;
            margin-left: 400px;
            border-radius: 10px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <fieldset>
        <h1>please enter the money want Calculator?</h1>
        <form action="" method="post">
            <input id="search" type="text" name="searchs" placeholder="would you like exchange? " required="">
            <label for="rate">interest rate:</label>
            <input id="rate" type="text" name="rate" placeholder="how much i want?" required="">
            <label for="year">Time: year</label>
            <input id="year" type="text" name="year" placeholder="how much i want send years?" required=""> 
            <input type="submit" id="submit" value="exchange">
        </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $searchs = $_REQUEST['searchs'];
        $rate = $_REQUEST['rate'];
        $years = $_REQUEST['year']; 
        $future_value = 0; 
   for($i=0;$i<= $years;$i++){
        $future_value = $searchs + $years*($searchs/100 * $rate);
   }
}  echo $future_value;
?>
    </fieldset>
</body>

</html>