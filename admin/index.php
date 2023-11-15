<?php 
include '../connect.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include '../model/cart.php';


include 'header.php';
 // controll
 if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            // kiem tra ng dung co bam add hay khong 
           if(isset($_POST['themmoi']) && $_POST['themmoi']){
            $tendanhmuc = $_POST['tendanhmuc'];
            insert_danhmuc($tendanhmuc);
           $thongbao="Thêm thành công !";
            
            
           }
           
            include 'danhmuc/add.php';
            break;
        case 'listdanhmuc':
            $listdanhmuc=loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)){
             delete_danhmuc($_GET['id_dm']);
            }
          $listdanhmuc=loadall_danhmuc();
           
                include 'danhmuc/list.php';
            break;

         case 'suadm':
            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)){
                
                $dm=loadone_danhmuc($_GET['id_dm']);
            }
           


               include "danhmuc/update.php";
               break;

        case 'updatedm':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $tendanhmuc = $_POST['tendanhmuc'];
                $id_dm=$_POST['id_dm'];
                update_danhmuc($id_dm,$tendanhmuc);
               $thongbao="Cật nhật thành công";
                
                
               }
               
               $listdanhmuc=loadall_danhmuc();
                include 'danhmuc/list.php';
            break;

//    Phan san pham
case 'addsp':
    // kiem tra ng dung co bam add hay khong 
   if(isset($_POST['themmoi']) && $_POST['themmoi']){
    $iddm = $_POST['iddm'];
    $name_sp = $_POST['name_sp'];
    $price_sp = $_POST['price_sp'];
    $mota = $_POST['mota'];
    $dacdiem=$_POST['dacdiem'];
    $image_sp=$_FILES['image_sp']['name'];
    $target_dir="../upload/";
    $target_file=$target_dir . basename($_FILES['image_sp']['name']);
if(move_uploaded_file($_FILES['image_sp']['tmp_name'],$target_file)){
    
}else{

}

    insert_sanpham($name_sp,$image_sp,$price_sp,$mota,$dacdiem,$iddm);
   $thongbao="Thêm thành công";
    
    
   }
   $listdanhmuc=loadall_danhmuc();
  
    include 'sanpham/add.php';
    break;
case 'listsanpham':
    if(isset($_POST['listok']) && $_POST['listok']){
        $kyw=$_POST['kyw'];
        $iddm=$_POST['iddm'];

    }else{
        $kyw='';
        $iddm=0;
    }
    $listdanhmuc=loadall_danhmuc();
    $listsanpham=loadall_sanpham($kyw,$iddm);
    include 'sanpham/list.php';
    

    break;
case 'xoasp':
    if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){
     delete_sanpham($_GET['id_sp']);
    }
  $listsanpham=loadall_sanpham('',0);
   
        include 'sanpham/list.php';
    break;

 case 'suasp':
    if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){
        
        $sanpham=loadone_sanpham($_GET['id_sp']);
    }
   
    $listdanhmuc=loadall_danhmuc();

       include "sanpham/update.php";
       break;

case 'updatesp':
  
    if(isset($_POST['capnhat']) && $_POST['capnhat']){
        $id_sp=$_POST['id_sp'];
        $iddm = $_POST['iddm'];
        $name_sp = $_POST['name_sp'];
        $price_sp = $_POST['price_sp'];
        $mota = $_POST['mota'];
        $dacdiem=$_POST['dacdiem'];
        $image=$_FILES['image_sp']['name'];
        $target_dir="../upload/";
        $target_file=$target_dir . basename($_FILES['image_sp']['name']);
    if(move_uploaded_file($_FILES['image_sp']['tmp_name'],$target_file)){
        
    }else{
    
    }
    
        update_sanpham($id_sp,$iddm,$name_sp,$image,$price_sp,$mota,$dacdiem);
       $thongbao="Cật nhật thành công";
        
        
       }
       $listdanhmuc=loadall_danhmuc();
       $listsanpham=loadall_sanpham("",0);
        include 'sanpham/list.php';
    break;         

    case 'dskh':
       
      $listtaikhoan=loadall_taikhoan();
       
            include 'taikhoan/list.php';
        break;
    
     
    case 'themtk':
       
        if(isset($_POST['themmoi']) && $_POST['themmoi']){
           
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $role = $_POST['role'];
        
            insert_khachhang($user,$pass,$email,$address,$tel,$role);  
                     $thongbao="Thêm thành công";
            
            
           }
             
                  include 'taikhoan/add.php';
              break;
    case 'xoatk':
                if(isset($_GET['id_ngdung'])&&($_GET['id_ngdung']>0)){
                 delete_taikhoan($_GET['id_ngdung']);
                }
              $listtaikhoan=loadall_taikhoan();
               
                    include 'taikhoan/list.php';
                break;

    case 'suatk':
        
            if(isset($_GET['id_ngdung'])&&($_GET['id_ngdung']>0)){
                
                $taikhoan=loadone_taikhoan($_GET['id_ngdung']);
            }
        
        include "taikhoan/update.php";
               break;

    case 'updatetk':
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
                
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $tel=$_POST['tel'];
            $id_ngdung=$_POST['id_ngdung'];
            
          

            update_taikhoan($id_ngdung, $user, $pass, $email, $address, $tel);
            $_SESSION['user']=checkuser($user,$pass);
            // header('Location:index.php?act=edit_taikhoan');
            $thongbao = "Cập nhật thành công!";
                 }
                        include "taikhoan/update.php";
        break; 
        
               
         case 'dsbl':
       
                $listbinhluan=loadall_binhluan(0);
                 
                      include 'binhluan/list.php';
                  break;  
         case 'xoabl':
                    if(isset($_GET['id_bl']) && ($_GET['id_bl'] > 0)){
                        $id_bl = $_GET['id_bl']; // Đảm bảo rằng biến $id_bl đã được định nghĩa
                        delete_binhluan($id_bl);
                    }
                    $listbinhluan=loadall_binhluan(0); // Truyền tham số 0 nếu bạn không cần lọc theo id_bl
                    
                    include 'binhluan/list.php';
                    break;
        case 'thongke':
            $listthongke=loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;

        default:
        include 'home.php';
        break;
        

        }
    }else{
        include 'home.php';
    }
 

include 'footer.php';
?>