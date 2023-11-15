<div class="tq">
    <div class="tq1">
 

    <h2 style="text-align: center;">ĐĂNG NHẬP</h2>
<div class="dnhap">

<div class="fdnhap">
    <div class="b1">
<h3>Đã có tài khoản ? Đăng nhập</h3>
    </div>
    <form action="index.php?act=dangnhap" method="POST">
        
            <div class="dn">
               Tên đăng nhập<br>
            <input type="user" name="user" required >
            </div>
            <div class="dn">
                Mật khẩu<br>
            <input type="password" name="pass" required>
            </div>

            <div class="dn">
                
            <input type="checkbox" name="">Ghi nhớ tài khoản
            </div>
       
       
      <br><br>
        <input type="submit" value="Đăng nhập" name="dangnhap">
       
    
       
    </form>
    <div class="mn">
    <ul>
        <li><a href="#">Quên tài khoản</a></li>
        <li><a href="#">Đăng kí tài khoản</a></li>
    </ul>
    </div>
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