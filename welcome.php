<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tiêm covid </title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="header">
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1 class="title">ĐĂNG KÝ TIÊM CHỦNG</h1>
        <form action="process.php" method="post">
            <div class="item">
                <label for="name">Họ và tên</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="item">
                <label for="name">Tuổi</label>
                <input type="text" id="age" name="age">
            </div>
            <div class="item">
                <label for="cccd">SỐ CCCD</label>
                <input type="text" id="cccd" name="cccd">
            </div>
            <div class="item">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="item">
                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="item">
                <label for="inject">Nơi tiêm</label>
                <input type="text" id="inject" name="inject">
            </div>
            <div class="item">
                <label for="priority ">Đối tượng ưu tiên</label>
                <input type="text" id="priority " name="priority ">
            </div>
            <div class="item">
                <label for="date">Ngày hẹn tiêm</label>
                <input type="date" id="date" name="date">
            </div>
            <button name="save">Đăng ký</button>
        </form>
    </div>
</body>

</html>