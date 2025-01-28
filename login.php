<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2l0eSUyMHdhbGxwYXBlcnxlbnwwfHwwfHx8MA%3D%3D');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #fff;
    }

    .form-login {
      width: 100%;
      max-width: 600px;
      padding: 40px;
      margin: auto;
      background: rgba(0, 0, 0, 0.7); /* พื้นหลังเข้ม */
      border-radius: 15px;
      box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
    }

    .form-login h2 {
      text-align: center;
      color: #50e7d4;
      margin-bottom: 30px;
    }

    .form-label {
      font-size: 1.1rem;
      font-weight: 600;
      color: #ddd;
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

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
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
  </style>
  <title>เข้าสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="form-login">
      <h2><i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าสู่ระบบจัดการข้อมูลพนักงาน</h2>
      <form method="POST" action="chk.php">
        <div class="mb-3">
          <label for="username" class="form-label">ชื่อเข้าระบบ</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">รหัสผ่าน</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
        <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
        <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
