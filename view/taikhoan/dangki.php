<div class="tq">
    <div class="tq1">
 

    <h2 style="text-align: center;">ĐĂNG KÍ THÀNH VIÊN</h2>
<div class="dki">

<div class="fdki">
    <form action="index.php?act=dangky" method="POST">
        
            <div class="dk">
                Email <br>
            <input type="email" name="email" required>
            </div>
            <div class="dk">
                Tên đăng nhập <br>
            <input type="user" name="user" required>
            </div>

            <div class="dk">
                Mật khẩu <br>
            <input type="password" name="pass" required>
            </div>

            <div class="dk">
                Địa chỉ  <br>
            <input type="text" name="address" required>
            </div>


            <div class="dk">
                Số điện thoại<br>
            <input type="text" name="tel" required>
            </div>

            
       
      <br><br>
        <input type="submit" value="Đăng kí" name="dangky">
        <input type="reset" value="Nhập lại">
    
       
    </form>
    <h2 class="thongbao">
    <?php 
 if(isset($thongbao)&&($thongbao!="")){
    echo $thongbao;
 }
    ?>
    </h2>
    
</div>
</div>
</div>

<div class="tq2">
    <?php 
  include 'view/boxright.php';
    ?>
</div>
</div>