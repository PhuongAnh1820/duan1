<?php 
if(is_array($sanpham)){
    extract($sanpham);

}
    $hinhpath="../upload/".$image_sp;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."'height='80'>";
        }else{
         $hinh="Khong co hinh";
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
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
         
        Loại sản phẩm
            <div class="m">
            <select name="iddm">
        <option value="0" selected>Tất cả</option>
            <?php 
             foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if($iddm==$id_dm) $s="selected"; else $s="";
                 echo '<option value="' . $id_dm . '" '.$s.'>' . $ten_danhmuc . '</option>';

                
            }
            ?>
            
         </select>
         </div>
         <div class="m">
         Tên sản phẩm <br>   <input type="text" name="name_sp" value="<?=$name_sp?>">
         </div>

         <div class="m">
         Ảnh sản phẩm <br>   <input type="file" name="image_sp"><?=$hinh?>
         </div>

         <div class="m">
         Giá sản phẩm <br>   <input type="text" name="price_sp" value="<?=$price_sp?>" >
         </div>

         <div class="m">
         Mô tả sản phẩm <br>   
         <input type="text" name="mota" value="<?=$mota?>">
         </div>

         <div class="m">
         Đặc điểm sản phẩm <br>   
         <textarea name="dacdiem"  cols="150" rows="10"><?=$dacdiem?>"</textarea>
         </div>
         

         <div class="m">
            <input type="hidden" name="id_sp" value="<?=$id_sp?>">
            <input type="submit" name="capnhat" value="CẬT NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsanpham"><input type="button" value="DANH SÁCH"> </a>
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