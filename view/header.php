<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="view/css/trangchu.css">
  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
    <div class="banner">
            <img style="width:100px;height:80px;" src="view/image/logo.jpg" >
            <nav>
                <ul class="menu1">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=tintuc">Tin tức</a></li>
                    <li><a href="index.php?act=giohang">Giỏ hàng </a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a href="#">Tài khoản</a>
                     <ul class="menu2">
                        
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí</a></li>
                     </ul>

                    </li>
                    <li>
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" required placeholder="Tìm Kiếm.....">
                            <input type="submit" name="timkiemm" value="Tìm kiếm">
                            
                        </form>
                        </li>

          
             
                </ul>
            </nav>
        </div>
 
