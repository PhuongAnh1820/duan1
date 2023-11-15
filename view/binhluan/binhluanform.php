<?php
session_start(); // lay gia tri session
include "../../connect.php";
include "../../model/binhluan.php";

$idpro=$_REQUEST['idpro'];
$dsbl= loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .binhluan table{
            width: 90%;
            margin-left:5%;

        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
        </style>
</head>
<body>


<div>

    <div class="menu-dm">

    <h3 style="font-size:26px;
          color: #b8b6b6">BÌNH LUẬN</h3><br>
    <?php 
     if(isset($_SESSION['user'])&& (count($_SESSION['user'])>0)){
    
     
    ?>
          <div class="binhluan">
   <table>
   
    <?php 
    
     if(isset($_SESSION['user'])){
      extract($_SESSION['user']);
     
      foreach($dsbl as $bl){
        extract($bl);
        
        echo '
        <div class="d1">
  
        <i class="fa fa-user fa-lg" style="font-size: 2em;margin-left:20px;"></i><b style="margin-left: 15px;font-size: 19px;">'.$user.'</b> 
            <br> <p style="margin-left: 20px;">'.$noidung.'</p> 
           <p style="margin-left: 20px;font-size:11px;"><i>'.$ngaybinhluan.'</i></p> 
        </div>
        ';
        
      }
     }
    ?>
    
   
   </table>
          </div>
    </div>

    <div class="gui">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="hidden" name="idpro" value="<?= $idpro ?>">
            <input type="text" name="noidung" style="width: 700px;height: 60px;">
            <input type="submit" name="guibinhluan" value="Bình luận">
        </form>
    </div>
<?php 
     }else "<a href='index.php?act=dn' target='_parent'>Bạn phải đăng nhập mới có thể bình luận !</a> ";
?>
    <?php 
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $noidung=$_POST['noidung'];
        $idpro=$_POST['idpro'];
        $iduser=$_SESSION['user']['id_ngdung'];
        $ngaybinhluan=date('h:i:sa d/m/Y');
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
    ?>
    </div>

        
</body>
</html>