<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: solid 1px #ccc;
        }

        form {
            width: 450px;
        }
    </style>
</head>

<body>
    <?php

    require_once 'Employee/Employee.php';
    require_once 'managerPloyee/EmployeeManager.php';

    use Employee\ManagerEmployee;
    use managerPloyee\EmployeeManager;

    function loadRegistrations($fileName)
    {
        $jsonData = file_get_contents($fileName);
        return json_decode($jsonData, true);
    }

    function saveDataJSON($fileName, $firstname, $lastrName, $address, $dayOfBirth, $jobLocalcation)
    {

        try {
            $contact = array(
                'firstname' => $firstname,
                'lastrName' => $lastrName,
                'address' => $address,
                'dayOfBirth' => $dayOfBirth,
                'jobLocalcation' => $jobLocalcation,

            );
            // converts json data into array
            $arrData = loadRegistrations($fileName);

            // Push user data to array
            array_push($arrData, $contact);
            // Convert updated array to JSON
            $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
            // write json data into data.json file
            file_put_contents($fileName, $jsonData);
            echo "thêm dữ liệu thành công";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }

    $firstnameErr = null;
    $lastrNameErr = null;
    $addressErr = null;
    $dayOfBirthErr = null;
    $jobLocalcationErr = null;

    $firstname = null;
    $lastrName = null;
    $address = null;
    $dayOfBirth = null;
    $jobLocalcation = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["firstname"];
        $email = $_POST["lastrName"];
        $phone = $_POST["address"];
        $phone = $_POST["dayOfBirth"];
        $phone = $_POST["jobLocalcation"];

        $hasError = [];

        if (empty($firstname)) {
            $hasError = "HỌ không được để trống!";
        }
        if (empty($lastrName)) {
            $hasError = "Tên không được để trống!";
        }
        if (empty($address)) {
            $hasError = "địa chỉ không được để trống!";
        }
        if (empty($dayOfBirth)) {
            $hasError = "ngày sinh không được để trống!";
        }
        if (empty($jobLocalcation)) {
            $hasError = "vị trí công việc không được để trống!";
        }

        if (!$hasError) {
            saveDataJSON("data.json", $firstname, $lastrName, $address, $dayOfBirth, $jobLocalcation);
            $name = null;
            $email = null;
            $phone = null;
            $dayOfBirth = null;
            $jobLocalcation = null;
        }




        $fileJson = "data.json";
        $objemployee = $_REQUEST;
        $employees = file_get_contents($fileJson);
        if ($employees == " ") {
            $employees = [];
        } else {
            $employees = json_decode($employees, true);
        }

        $employees[] = $objemployee;
        $data = json_encode($employees);
        file_put_contents($fileJson, $data);
    }

    ?>

    <h2>ManagerEmployee</h2>
    <form method="post">
        <fieldset>
            <legend>Employee</legend>
            họ: <input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <br><br>
            tên: <input type="text" name="lastrName" value="<?php echo $lastrName; ?>">
            <span class="error">* <?php echo $lastrNameErr; ?></span>
            <br><br>
            địa chỉ: <input type="text" name="address" value="<?php echo $address; ?>">
            <span class="error">*<?php echo $addressErr; ?></span>
            <br><br>
            ngày sinh: <input type="date" placeholder="yyyy/mm/dd" name="dayOfBirth" value="" <?php echo $dayOfBirth; ?>">
            <span class="error">*<?php echo $dayOfBirthErr; ?></span>
            <br><br>
            vị trí công việc: <input type="text" name="jobLocalcation" value="<?php echo $jobLocalcation; ?>">
            <span class="error">*<?php echo $jobLocalcationErr; ?></span>
            <br><br>
            <input type="submit" value="Register">
            <p><span class="error">* required field.</span></p>
        </fieldset>
    </form>

    <?php
    $registrations = loadRegistrations('data.json');
    ?>
    <h2>ManagerEmployee</h2>
    <table>
        <tr>
            <th>firstname</th>
            <th>lastrName</th>
            <th>address</th>
            <th>dayOfBirth</th>
            <th>jobLocalcation</th>

        </tr>
        <?php foreach ($registrations as $registration) : ?>
            <tr>
                <td><?= $registration['firstname']; ?></td>
                <td><?= $registration['lastrName']; ?></td>
                <td><?= $registration['address']; ?></td>
                <td><?= $registration['dayOfBirth']; ?></td>
                <td><?= $registration['jobLocalcation']; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>