<?php 
if(is_array($taikhoan)){
    extract($taikhoan);
}
    
?>
<div class="ad">
          <p> ADMIN</p> 
        </div>
 
        <div class="nd">
            <h1 style="text-align: center; font-size: 30px;" >CÔNG CỤ QUẢN TRỊ WEBSITE</h1>
        </div>


        <div class="row">
            <div class="row header">
              <h3>CẬP NHẬT TÀI KHOẢN</h3>  
            </div>
            <div class="row"></div>
        </div>

        <div class="form">
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
         
         
         <div class="m">
         Email<br>   <input type="email" name="email" value="<?=$email?>">
         </div>

         <div class="m">
         Tên đăng nhập <br>   <input type="text" name="user" value="<?=$user?>">
         </div>

         <div class="m">
         Mật khẩu <br>   <input type="text" name="pass" value="<?=$pass?>" >
         </div>

         <div class="m">
         Địa chỉ<br>   
         <input type="text" name="address" value="<?=$address?>">
         </div>

         <div class="m">
         Số điện thoại<br>   
         <input type="text" name="tel" value="<?=$tel?>">
         </div>
         

         <div class="m">
            <input type="hidden" name="id_ngdung" value="<?=$id_ngdung?>">
            <input type="submit" name="capnhat" value="CẬT NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"> </a>
         </div>
            
            </form>
        </div>

        <div >
            <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
            ?>
        </div>
       

    </div>