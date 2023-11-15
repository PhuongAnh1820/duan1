<main>
   
               
<div class="tq">
<div class="tq1">
<h3>SẢN PHẨM : <strong><?=$tendm?></strong></h3><br><br>
<div class="sanpham">
 <?php 
 $i=0;
   foreach ($dssp as $sp){
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
     <p class="binhthuong">WD1988 </p>
     <p class="gia">'.$price_sp.'</p>

    </div>
    <div class="nut">
     <a href="#">Thêm vào giỏ hàng</a>
     
    </div>
    <div class="noilen"><a href="'.$linksp.'">Xem chi tiet</a></div>
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