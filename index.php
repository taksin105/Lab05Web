<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee"; // เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); // รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); // เก็บผลที่ได้จากคำสั่ง $result เก็บไว้ในตัวแปร $count
$order = 1; // ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Custom CSS -->
  <style>
    /* ใช้ภาพพื้นหลังรูป carbon */
    body {
      background-image: url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2l0eSUyMHdhbGxwYXBlcnxlbnwwfHwwfHx8MA%3D%3D');
      background-size: cover;
      background-position: center center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .container {
      max-width: 1200px;
      background-color: rgba(255, 255, 255, 0.6); /* ใช้โปร่งใสเบาๆ ให้พื้นหลัง */
      padding: 30px;
      border-radius: 10px;
      backdrop-filter: blur(10px); /* เพิ่มเอฟเฟกต์เบลอ */
      -webkit-backdrop-filter: blur(10px); /* รองรับเบราว์เซอร์ที่ใช้ WebKit */
    }

    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-top: 30px;
      color: #007bff;
    }

    .form-group input[type="text"] {
      background-color: #fff;
      color: #333;
      border: 1px solid #007bff;
      border-radius: 20px;
      padding: 10px;
    }

    .form-group input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 16px;
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.6);
    }

    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
      box-shadow: 0 0 15px rgba(0, 123, 255, 0.8);
    }

    .table {
      margin-top: 30px;
      font-size: 1.1rem;
    }

    .table th,
    .table td {
      padding: 12px;
      text-align: center;
      vertical-align: middle;
    }

    .table-bordered {
      border: 1px solid #ddd;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #f9f9f9;
    }

    .table th {
      background-color: #007bff;
      color: #fff;
    }

    .table td {
      color: #333;
    }

    .btn-custom {
      background-color: #28a745;
      color: #fff;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 16px;
      box-shadow: 0 0 10px rgba(40, 167, 69, 0.6);
    }

    .btn-custom:hover {
      background-color: #218838;
      box-shadow: 0 0 15px rgba(40, 167, 69, 0.8);
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      border-radius: 5px 5px 0 0;
      font-size: 1.25rem;
      text-align: center;
    }

    .card-body {
      padding: 20px;
    }

    .search-form {
      margin-top: 30px;
    }
  </style>

  <title>รายชื่อพนักงานทั้งหมด</title>
</head>

<body>
  <div class="container">
    <?php
    require("nav.php");
    ?>

    <h1>รายชื่อพนักงานทั้งหมด</h1>

    <!-- Search Form -->
    <div class="search-form">
      <form action="searchdata.php" class="form-group" method="POST">
        <div class="row">
          <div class="col-md-8">
            <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
          </div>
          <div class="col-md-4">
            <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
          </div>
        </div>
      </form>
    </div>

    <!-- Employee Table -->
    <div class="card mt-4 shadow">
      <div class="card-header">
        ข้อมูลพนักงาน
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>คำนำหน้า</th>
              <th>ชื่อ</th>
              <th>สกุล</th>
              <th>วันเกิด</th>
              <th>ที่อยู่ปัจจุบัน</th>
              <th>ทักษะความสามารถ</th>
              <th>เบอร์โทรศัพท์</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $order++; ?></td>
                <td><?php echo $row["emp_title"]; ?></td>
                <td><?php echo $row["emp_name"]; ?></td>
                <td><?php echo $row["emp_surname"]; ?></td>
                <td><?php echo $row["emp_birthday"]; ?></td>
                <td><?php echo $row["emp_adr"]; ?></td>
                <td><?php echo $row["emp_skill"]; ?></td>
                <td><?php echo $row["emp_tel"]; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Insert Employee Button -->
    <div class="text-center mt-4">
      <a href="insertform.php" class="btn btn-custom">กรอกข้อมูลพนักงาน</a>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
