
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       fieldset{
        width:300px;
        margin-left: 400px;
       }
        </style>
</head>

<body>
    <fieldset>
    <h2> Dictionnary English-VietNamese</h2>
        <form action="" method="post">
            
            <input type="text" name="searchs">
            <input type="submit" id="submit" value="search">
        </form>
        <?php
$dictionary = [
    "you" => "bạn",
    "like" => "thích",
    "me" => "tôi",
    "yes" => "vâng",
    "me too" => "tôi cũng vậy",
    "so" => "vậy",
    "we" => "chúng ta",
    "dating" => "hẹn hò"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["searchs"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }

    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
    </fieldset>
    <fieldset>
        <p>you</p>
        <p>like</p>
        <p>me</p>
        <p>me too</p>
        <p>so</p>
        <p>we</p>
        <p>dating</p>
    </fieldset>
</body>

</html>