<div class="tq">
    <div class="tq1">
 

    <h2 style="text-align: center;">CẬP NHẬT TÀI KHOẢN</h2>
<div class="cnhat">

<div class="fcnhat">
   <?php 
   if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
    extract($_SESSION['user']);

   }
   ?>
    <form action="index.php?act=edit_taikhoan" method="POST">
        
            <div class="dk">
                Email <br>
            <input type="email" name="email" value="<?=$email?>" >
            </div>
            <div class="dk">
                Tên đăng nhập <br>
            <input type="user" name="user" value="<?=$user?>">
            </div>

            <div class="dk">
                Mật khẩu <br>
            <input type="password" name="pass" value="<?=$pass?>">
            </div>

            <div class="dk">
                Địa chỉ<br>
            <input type="text" name="address" value="<?=$address?>">
            </div>

            <div class="dk">
                Số điện thoại <br>
            <input type="text" name="tel" value="<?=$tel?>">
            </div>

            
       
      <br><br>
      <input type="hidden" name="id_ngdung" value="<?=$id_ngdung?>">
        <input type="submit" value="Cập nhật" name="capnhat">
        <input type="reset" value="Nhập lại">
    
       
    </form>
   
    <?php
if (isset($thongbao) && !empty($thongbao)) {
    echo '<div class="thongbao">' . $thongbao . '</div>';
}
?>

    
</div>
</div>
</div>

<div class="tq2">
    <?php 
  include 'view/boxright.php';
    ?>
</div>
</div>