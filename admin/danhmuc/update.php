<?php 
if(is_array($dm)){
    extract($dm);

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
              <h3>CẬP NHẬT SẢN PHẨM</h3>  
            </div>
            <div class="row"></div>
        </div>

        <div class="form">
            <form action="index.php?act=updatedm" method="post">
         <div class="m">

       
         <div class="m">
         Tên loại <br>   <input type="text" name="tendanhmuc" value="<?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc  ?>">
         </div>

         <div class="m">
            <input type="hidden" name="id_dm" value="<?php if(isset(    $id_dm)&&($id_dm>0)) echo $id_dm  ?>">
            <input type="submit" name="capnhat" value="CẬT NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listdanhmuc"><input type="button" value="DANH SÁCH"> </a>
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