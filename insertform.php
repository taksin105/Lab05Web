<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2l0eSUyMHdhbGxwYXBlcnxlbnwwfHwwfHx8MA%3D%3D');
    background-size: cover; /* ให้พื้นหลังปรับขนาดเต็มหน้าจอ */
    background-position: center center; /* จัดตำแหน่งภาพให้กึ่งกลาง */
    background-repeat: no-repeat; /* ป้องกันไม่ให้ภาพพื้นหลังซ้ำ */
    background-attachment: fixed; /* ให้ภาพพื้นหลังไม่เลื่อนตามหน้า */
    height: 100vh; /* ทำให้พื้นหลังเต็มหน้าจอ */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #fff;
    }

    .form-signin {
      width: 100%;
      max-width: 500px;
      padding: 30px;
      margin: auto;
      background: rgba(0, 0, 0, 0.7); /* เพิ่มพื้นหลังโปร่งแสง */
      border-radius: 15px;
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .form-signin h2 {
      text-align: center;
      color: #50e7d4;
      margin-bottom: 30px;
    }

    .form-group label {
      font-size: 1rem;
      color: #ddd;
      font-weight: 600;
    }

    .form-control {
      background-color: #333;
      border-color: #444;
      color: #fff;
      border-radius: 10px;
      padding: 12px;
      font-size: 1rem;
    }

    .form-control:focus {
      background-color: #444;
      border-color: #50e7d4;
      box-shadow: 0 0 5px rgba(80, 231, 212, 0.8);
    }

    .btn {
      font-size: 1.1rem;
      padding: 12px 20px;
      border-radius: 10px;
      width: 100%;
      margin-top: 15px;
      transition: all 0.3s ease-in-out;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    .btn:focus {
      outline: none;
    }

    .text-center a {
      color: #50e7d4;
      text-decoration: none;
      font-size: 1.1rem;
      display: inline-block;
      margin-top: 15px;
    }

    .text-center a:hover {
      text-decoration: underline;
    }

    .form-group textarea {
      resize: vertical;
    }
  </style>
  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <h2 class="text-center">บันทึกข้อมูลพนักงาน</h2>
    <hr>
    <form action="insertdata.php" method="POST" class="form-signin">
      <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>
      <div class="form-group">
        <label for="emp_name">ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_surname">นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control">
      </div>
      <div class="form-group">
        <label for="emp_birthday">วันเดือนปีเกิด :</label>
        <input type="date" name="emp_birthday" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_adr">ที่อยู่ :</label>
        <textarea name="emp_adr" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_skill">ทักษะพิเศษ :</label>
        <textarea name="emp_skill" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_tel">เบอร์โทรศัพท์</label>
        <input type="tel" name="emp_tel" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_user">ชื่อเข้าระบบ</label>
        <input type="tel" name="emp_user" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_pass">รหัสผ่าน</label>
        <input type="password" name="emp_pass" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_level">ระดับผู้ใช้งาน</label>
        <select name="emp_level" class="form-control" required>
          <option value="">--เลือกระดับผู้ใช้งาน--</option>
          <option value="a">ผู้ดูแลระบบ</option>
          <option value="u">ผู้ใช้งาน</option>
        </select>
      </div>
      <div class="my-3">
        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
