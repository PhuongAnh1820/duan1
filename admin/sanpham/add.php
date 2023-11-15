<div class="ad">
          <p> ADMIN</p> 
        </div>
 
        <div class="nd">
            <h1 style="text-align: center; font-size: 30px;" >CÔNG CỤ QUẢN TRỊ WEBSITE</h1>
        </div>


        <div class="row">
            <div class="row header">
              <h3>THÊM MỚI SẢN PHẨM</h3>  
            </div>
            <div class="row"></div>
        </div>

        <div class="form">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
         

            <div class="m">
         Danh muc<br>  
         <select name="iddm">
            <?php 
             foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id_dm . '">' . $ten_danhmuc . '</option>';
            }
            ?>
            
         </select>
         </div>
         <div class="m">
         Tên sản phẩm <br>   <input type="text" name="name_sp">
         </div>

         <div class="m">
         Ảnh sản phẩm <br>   <input type="file" name="image_sp">
         </div>

         <div class="m">
         Giá sản phẩm <br>   <input type="text" name="price_sp" >
         </div>

         <div class="m">
         Mô tả sản phẩm <br>   
         <input type="text" name="mota" >
         </div>

         
         <div class="m">
         Đặc điểm sản phẩm<br>   
         <textarea name="dacdiem"  cols="150" rows="15"></textarea>
         </div>

         

         <div class="m">
            <input type="submit" name="themmoi" value="THÊM MỚI">
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