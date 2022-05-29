<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ví dụ minh họa - Học lập trình Online</title>
</head>

<body>
    <form method="post" action="">
        <h2>delete number</h2>
        Nhập số cần xóa: <input type="number" name="number">
        <input type="submit" value="delete">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $number = $_POST["number"];
            $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            function delete($array, $number)
            {
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] == $number) {
                        array_splice($array, $i, 1);
                    };
                }
                echo "<pre>";
                print_r($array);
            }
            delete($array, $number);
        }
        ?>
</body>

</html>
