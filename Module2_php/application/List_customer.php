<?php
$lisr_customer =[
 '1'=>[ 
     'name'=>' Hiền Hồ',
     'Dateofbirth'=>'20-3-1997',
     'address'=>'Ho Chi Minh city',
     'picture'=>'applicationPhp/img/hienho.jpg'
    ],
    '2'=>[ 
        'name'=>'Lisa',
        'Dateofbirth'=>'20-3-1998',
        'address'=>'Seoul city',
        'picture'=>'applicationPhp/img/lisa2.jpg'
       ],
       '3'=>[ 
        'name'=>' Rose',
        'Dateofbirth'=>'20-5-1998',
        'address'=>'Seoul city',
        'picture'=>'applicationPhp/img/rose1.jpg'
       ],
       '4'=>[ 
        'name'=>' Sơn Tùng MTP',
        'Dateofbirth'=>'20-7-1994',
        'address'=>'Ho Chi Minh city',
        'picture'=>'applicationPhp/img/st.jpg'
       ],
       '5'=>[ 
        'name'=>'Erik',
        'Dateofbirth'=>'20-3-1997',
        'address'=>'Ha Noi city',
        'picture'=>'applicationPhp/img/Erik.jpg'
       ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-top: -70px;
  box-shadow: 5px 5px 5px 10px #cadff1;
  margin-left: 190px;
}

 th,td {
  border-bottom: 1px solid #d7e6f5;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
    text-align: center;
}
</style>
</head>
<body>
    <form method="GET">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
               value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
    <table rowspan=5>
        <thead>
        <h1>List Customer</h1>
        <tr>
        <th>Name</th>
        <th>Date of birth</th>
        <th> Address</th>
        <th>Picture</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lisr_customer as $key => $value): ?>
    <tr>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['Dateofbirth'] ?></td>
        <td><?php echo $value['address'] ?></td>
        <td><img src="<?php echo $value['picture'] ?>" alt="" width="100px"></td> <br>
    </tr>
<?php endforeach; ?>
        </tbody>
        
    </table>
</body>
</html>

