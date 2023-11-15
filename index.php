<?php
session_start();
include 'connect.php';
include 'model/danhmuc.php';
include "model/sanpham.php";
include "model/taikhoan.php";
include 'view/header.php';
include 'global.php';


$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
$dstop10=loadall_sanpham_top10();

if(isset($_GET['act'])&&($_GET['act']!=0)){
    $act=$_GET['act'];
    switch($act){
        case 'sanphamct':
   
            if(isset($_GET['id_sp']) && $_GET['id_sp']>0){
                $id_sp=$_GET['id_sp'];
                $onesp=loadone_sanpham($id_sp);
                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id_sp,$iddm);
                include "view/sanphamct.php";
            }else{
                include "view/home.php";

            }
            
            break;

            case 'sanpham':
                if(isset($_POST['kyw']) && $_POST['kyw']!=""){
                    $kyw=$_POST['kyw'];

                } else{
                    $kyw="";
                }   

                if(isset($_GET['iddm']) && $_GET['iddm']>0){
                    $iddm=$_GET['iddm'];
                   
                    
                }else{
                    $iddm=0;
    
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                    include "view/sanpham.php";
                break;
        case 'tintuc':
            include "view/tintuc.php";
            break;
        case 'dangky':
            if(isset($_POST['dangky']) && $_POST['dangky']){
            $email=$_POST['email'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $address=$_POST['address'];
            $tel=$_POST['pass'];
            insert_taikhoan($email,$user,$pass,$address,$tel);
            $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập";

            }
                include "view/taikhoan/dangki.php";
                break;
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               $checkuser= checkuser($user,$pass);
               if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                 header('Location:index.php');
                
               } else{
                $thongbao="Tài khoản không tồn tại. Vui lòng nhập lại hoặc đăng ký";
               }
                            }
                    include "view/taikhoan/dangnhap.php";
                    break;
       case 'edit_taikhoan':
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
                        include "view/taikhoan/edit_taikhoan.php";
                        break;

        case 'quenmk':
        if(isset($_POST['guiemail']) && $_POST['guiemail']){
             
        $email=$_POST['email'];
        $checkemail=checkemail($email);
        if(is_array($checkemail)){
        $thongbao="Mật khẩu của bạn là :".$checkemail['pass'];
        }else{
            $thongbao="Email này không tồn tại";
        }
                                
        }
         include "view/taikhoan/quenmk.php";
        break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
                include "view/giohang.php";
                break;
        case 'lienhe':
                include "view/lienhe.php";
                break;
        default:
        include "view/home.php";
        break;
    }
}else{
       include "view/home.php";
    }
        

include 'view/footer.php'
?>