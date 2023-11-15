<div class="ad">
          <p> ADMIN</p> 
        </div>
 
        <div class="nd">
            <h1 style="text-align: center; font-size: 30px;" >CÔNG CỤ QUẢN TRỊ WEBSITE</h1>
        </div>


        <div class="row">
            <div class="row header">
              <h3>THÊM TÀI KHOẢN</h3>  
            </div>
            <div class="row"></div>
        </div>

        <div class="form">
            <form action="index.php?act=themtk" method="post">
         
            <div class="dk">
                Email <br>
            <input type="email" name="email">
            </div>
            <div class="dk">
                Tên đăng nhập <br>
            <input type="text" name="user">
            </div>

            <div class="dk">
                Mật khẩu <br>
            <input type="password" name="pass">
            </div>

            <div class="dk">
                Địa chỉ<br>
            <input type="text" name="address" >
            </div>

            <div class="dk">
                Số điện thoại <br>
            <input type="text" name="tel" >
            </div>

            <div class="dk">
                Role<br>
            <input type="text" name="role" >
            </div>

            
       
      <br><br>
        <input type="submit" value="Thêm mới" name="themmoi">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=dskh"><input type="button" value="Danh sách"> </a>

      

         
            
            </form>
        </div>

        <div class="thongbao2">
    <?php 
 if(isset($thongbao)&&($thongbao!="")){
    echo $thongbao;
 }
    ?>
    </h2>
       

    </div>