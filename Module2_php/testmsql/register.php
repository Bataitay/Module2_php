<?php require_once "../testmsql/connect.php"  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>thêm sinh viên</title>
</head>

<body>
    <div class="container">
        <form method="post" action="show.php">
            <div class="form-group">
                <label for="mssv">MSV</label>
                <input name="mssv" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Họ và tên</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
            <label for="class">lớp</label>
            <input type="text" name="class" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
    </form>
    </div>
</body>

</html>