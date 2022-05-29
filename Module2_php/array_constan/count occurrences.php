<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <h2>count characters</h2>
        <label for="characters">enter need count characters:</label> <input type="text" id="characters" name="characters">
        <input type="submit" value="count"><br>

</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $strings = 'can you help me?';
    $characters = $_POST["characters"];
    function counts($strings, $characters)
    {
        $count = 0;
        for ($i = 0; $i < strlen($strings); $i++) {
            if (substr($strings, $i, 1) == $characters) { //sẽ trích xuất một phần của chuỗi, phần chuỗi được trích xuất sẽ tùy thuộc vào tham số truyền vào.
                $count++;
            }
        }
        echo "<b>" . "have" . $count . " character " . $characters . " in strings '" . $strings . "'";
    }
    counts($strings, $characters);
}
?>

</html>