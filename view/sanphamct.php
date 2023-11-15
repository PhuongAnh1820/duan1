

        <div class="look">
            <a href="index.php">Trang chủ </a> <i class="material-icons">&#xe315;</i><?php extract($onesp); echo '<strong>'.$name_sp.'</strong>' ?>
        </div>
<br><br>
        <div class="noidung"> <!-- bắt đầu nội dung-->

        <?php 
            extract($onesp);
            $image_sp=$img_path.$image_sp;
           echo '<div class="bentrai">   <!-- nội dung bên trái-->
           <div class="anh-chinh"> <!-- hiển thị ảnh-->
                 <img src="'.$image_sp.'" class="img-feature"/>
                
           </div>
               
          
       </div>
       <div class="benphai"> 
                <h2 style="padding:20px;">'.$name_sp.'</h2><!-- nội dung bên phải-->
                <p style="padding:20px;" >'.$mota.'</p>
                 <div class="gia"> <h1 style="padding:20px";>'.$price_sp.'</h1> </div>
               
       '
         
        ?>
           
<!-- 
            <div class="benphai">  -->
                <!-- <h2 style="padding:20px;">[ĐĂNG KÝ MYSONY, GIẢM NGAY 200K] Máy ảnh vlog full-frame ZV-E1</h2><!-- nội dung bên phải-->
                <!-- <p style="padding:20px;" >Model: ZV - E1/BQ</p> -->
                 <!-- <h1 style="padding:20px";>52,990,000₫</h1> --> 
               <!-- <div class="t" style="padding:20px"> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i></div>  -->
    <div class="t" style="padding:20px"> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i> <i class="fa-solid fa-star fa-sm" style="color: #f3d020;"></i></div> 

               <h3 style="padding:20px">MÀU SẮC</h3>
<form>
    <label class="color">
        <input type="checkbox" name="mausac" class="color">
        MÀU ĐEN
    </label>
    <label class="color">
        <input type="checkbox" name="mautrang" class="color">
        MÀU TRẮNG
    </label>
</form>


                <div class="buy" style="padding:20px;">
                    <button class="minus-btn" onclick="handleMinus()">
                        <i class='bx bx-minus'></i>
                    </button>
                    <input type="text" name="amonut" id="amount" value="1">
                    <button class="plus-btn" onclick="handlePlus()">
                        <i class='bx bx-plus'></i>
                    </button>

                </div>

                <div class="gn" >
                    <button class="them">
                    <a href="#"><b>Thêm vào giỏ hàng</b></a>
                  </button> 
                  <div class="heart">
                    <i class='bx bx-heart'></i>
                  </div>
                    
                </div>
          

            </div>

     
        </div>
<div class="tq">
    <div class="tq1">
    <?php 
    extract($onesp);
    echo '<h3 style="font-size:26px;
    color: #b8b6b6">TỔNG QUAN</h3>
<br>
<p class="vv">'.$dacdiem.'</p><br><br>'
  ?>

<iframe src="view/binhluan/binhluanform.php?idpro=<?php echo $id_sp; ?>" width="90%" height="400" frameborder="1"></iframe>

   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
    $(document).ready(function(){
    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id_sp?>});
});

        
</script> 
    <div class="row" id="binhluan">

    </div> -->
    
   <!-- <div class="danhgia">
    <div class="bl">

    <form>
        <input type="text" name="hoten" required placeholder="Họ và tên....." style="width:300px;
                                                                                     border:1px solid #eee"> 
        <input type="email" name="email" required placeholder="Địa chỉ email...."  style="width:300px;
        border:1px solid #eee"> <br><br>
        <input type="text" name="noidung" required placeholder="Nhập nội dung bình luận...." style="width:600px;
        height:100px;
        border:1px solid #eee"><br><br>
       <input type="submit" name="binhluan" value="BÌNH LUẬN" class="bluan">
    </form>
    </div>
   </div> -->



   <BR><BR><BR>
  
   <h3 style="font-size:26px;
          color: #b8b6b6">SẢN PHẨM CÙNG LOẠI</h3><br>
<div class="spcl">
        <?php
        foreach($sp_cung_loai as $sp_cung_loai){
            extract($sp_cung_loai);
            $linksp="index.php?act=sanphamct&id_sp=".$id_sp;
            echo '
            
            <li><a href="'.$linksp.'">'.$name_sp.'</a></li>
            ';
        }
        ?>
    </div>
</div>

<div class="tq2">
    <?php 
  include 'boxright.php';
    ?>
</div>
</div>
  
  


