<?php
$customerList = [
    "1" => [
        "name" => " Hiền Hồ",
        "day_of_birth" => "1997/08/20",
        "address" => "Hà Nội",
        "profile" => "applicationPhp/img/hienho.jpg"],
    "2" => [
        "name" => "Lisa",
        "day_of_birth" => "1998/08/21",
        "address" => "Bắc Giang",
        "profile" => "applicationPhp/img/lisa2.jpg"],
    "3" => [
        "name" => "Rose",
        "day_of_birth" => "1998/08/22",
        "address" => "Nam Định",
        "profile" => "applicationPhp/img/rose1.jpg"],
    "4" => [
        "name" => "Sơn Tùng MTP",
        "day_of_birth" => "1994/08/17",
        "address" => "Hà Tây",
        "profile" => "applicationPhp/img/st.jpg"],
    "5" => [
        "name" => "Erik",
        "day_of_birth" => "1997/08/19",
        "address" => "Hà Nội",
        "profile" => "applicationPhp/img/Erik.jpg"]
];
function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height:50px;
            width: 50px;
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
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
h2{
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
    <table >
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</form>
</body>
</html>