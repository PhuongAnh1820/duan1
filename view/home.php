<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  
  <img src="view/image/banner1.webp" style="width:100%" >
  
</div>

<div class="mySlides fade">
 
  <img src="view/image/banner2.webp" style="width:100%" >
  
</div>

<div class="mySlides fade">
  
  <img src="view/image/banner3.webp" style="width:100%">
  
</div>

<div class="mySlides fade">
   
  <img src="view/image/banner4.webp" style="width:100%">
    
  </div>

<!-- Next and previous buttons -->

</div>
   
 <main>              
<div class="tq">
<div class="tq1">
<h1 style="text-align: center;">KHUYẾN MÃI HOT</h1><br><br>
<div class="sanpham">
 <?php 
 $i=0;
   foreach ($spnew as $sp){
    extract($sp);
    $hinh=$img_path.$image_sp;
   
    $linksp="index.php?act=sanphamct&id_sp=".$id_sp;

    
    echo ' <div class="sp1">
    <div class="tragop">
        <p>TRẢ GÓP 0%</p>
    </div>

    <div class="anh">
    <img src="'.$hinh.'">
    </div>
     

    <div class="nd">
     <p class="in-dam">
        <a href="#">'.$name_sp.'</a>
         
     </p>
     <p class="binhthuong">'.$mota.'</p>
     <p class="gia">'.$price_sp.'</p>

    </div>
    <div class="nut">
     <a href="#">Thêm vào giỏ hàng</a>
     
    </div>
    <div class="noilen"><a href="'.$linksp.'">Xem chi tiết</a></div>
 </div>';
   }  
 ?>

     



</div>
</div> 
<div class="tq2" style="height:auto">
    <?php 
       include 'boxright.php';
    ?>
    
    </div>
    
</div>
 </main>
