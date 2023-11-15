<div class="tq">
    <div class="tq1">
 

    <h2 style="text-align: center;">QUÊN MẬT KHẨU</h2>
<div class="dki">

<div class="fdki">
    <form action="index.php?act=quenmk" method="POST">
        
            <div class="dk">
                Email <br>
            <input type="email" name="email" required>
            </div>
          

            
       
      <br><br>
        <input type="submit" value="Gửi" name="guiemail">
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