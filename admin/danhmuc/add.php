<div class="ad">
          <p> ADMIN</p> 
        </div>
 
        <div class="nd">
            <h1 style="text-align: center; font-size: 30px;" >CÔNG CỤ QUẢN TRỊ WEBSITE</h1>
        </div>


        <div class="row">
            <div class="row header">
              <h3>THÊM MỚI DANH MỤC</h3>  
            </div>
            <div class="row"></div>
        </div>

        <div class="form">
            <form action="index.php?act=adddm" method="post">
         <div class="m">

       
         <div class="m">
         Tên loại <br>   <input type="text" name="tendanhmuc">
         </div>

         <div class="m">
            <input type="submit" name="themmoi" value="THÊM MỚI">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listdanhmuc"><input type="button" value="DANH SÁCH"> </a>
         </div>
            
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