

<div>
    <div class="tde1">
        <h4>THÔNG TIN</h4>
    </div>
     
    <?php 
   if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
  ?>
    <div class="dn">
    Xin chào <?=$user?>
 </div>
 <div class="dn">
 <div class="mn">
    <ul>
    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=edit_taikhoan">Cật nhật tài khoản</a></li>
        <?php if($role==1){ ?>
        <li><a href="admin/index.php">Admin</a></li>
        <?php } ?>
        <li><a href="index.php?act=thoat">Đăng xuất</a></li>
    </ul>
    </div>
 </div>
 <?php   }else{
        
   }
    ?>

</div>

<div>
    <div class="tde1">
        <h4>DANH MỤC SẢN PHẨM</h4>
    </div>
    <div class="menu-dm">

 
   <ul>
    <?php 
      foreach($dsdm as $dm){
        extract($dm);
        $linkdm="index.php?act=sanpham&iddm=".$id_dm;
        echo '<li><a href="'.$linkdm.'">'.$ten_danhmuc.'</a></li>';
      }
    ?>
   
   </ul>
 
    </div>
    </div>

    <div>
        <div class="tde1">
            <h4>TOP 10 YÊU THÍCH</h4>
        </div>
          <?php 
      foreach($dstop10 as $sp){
        extract($sp);
        $linksp="index.php?act=sanphamct&id_sp=".$id_sp;
        $image_sp=$img_path.$image_sp;
        echo '<div class="h1">
        <img src="'.$image_sp.'"></a>
          <a href="'.$linksp.'">'.$name_sp.'</a>
      </div>';
      }
          ?>

        
    </div>
    
    </div>