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
        form {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <fieldset>
        <h1>please enter the number need read?</h1>
        <form action="" method="post">
        <input id="search" type="text" name="searchs" placeholder="would you like enter?" required="">
            <input type="submit" id="submit" value="Read">
        </form>
        <?php
    function read_number_to_words($number) {
       
$dictionary = array( 
    "0" => "zero",
    "1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" =>"eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "eleven",
    "12" => "twelf",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
    "20" => "twenty",
    "30" => "thirty",
    "40" =>"forty",
    "50" => "fifty",
    "60" => "sixty",
    "70" => "seventy",
    "80" => "eightty",
    "90" => "ninety",
    "100" => "hundred",

);
$string = $fraction = null;
switch ($number) {
    case $number < 21:
        $string = $dictionary[$number];
        break;
    case $number < 100:
        $dozens   = ((int) ($number / 10)) * 10;
        $units  = $number % 10;
        $string = $dictionary[$dozens];
        if ($units) {
            $string .=' ' . $dictionary[$units];
        }
        break;
    case $number < 1000:
        $hundreds  =((int) $number / 100);
        $dozenss = $number % 100;
        $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
        if ($dozenss) {
            $string .= ' ' . read_number_to_words($dozenss);
        }
        break;   
}  
 {     
    $words = array();
    foreach (str_split((string) $fraction) as $number) {
        $string .= implode(' ', $words);
    }     
}
return $string;
}
echo '<b>' .'Number:'.$_POST["searchs"]  .'<br>' .read_number_to_words($_POST['searchs']) .'</b>';
?>
    </fieldset>
</body>
</html>