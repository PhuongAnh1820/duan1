<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h3>DANH SÁCH TÀI KHOẢN</h3>
<div class="table" style="margin-top: 40px;margin-left: 40px;">
     <table border="1" cellspacing="0">
        <tr>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">ID</td>
            <td style="width:180px;height:50px;font-weight: bold;text-align: center;">Tên đăng nhập</td>
            <td style="width:100px;height:50px;font-weight: bold;text-align: center;">Mật khẩu</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Email</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Địa chỉ</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Điện thoại</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Vai trò</td>
            <td style="width:200px;height:50px;font-weight: bold;text-align: center;">Sửa</td>

            <td style="width:200px;height:50px;font-weight: bold;text-align: center;">Xóa</td>
        </tr>
    
     </div>

     <?php
    foreach ($listtaikhoan as $taikhoan) {
        extract($taikhoan);
        $suatk = "index.php?act=suatk&id_ngdung=".$id_ngdung;
        $xoatk = "index.php?act=xoatk&id_ngdung=".$id_ngdung;

        echo '<tr>
            <td style="text-align:center;height:50px">' . $id_ngdung. '</td>
            <td style="text-align:center;height:50px">' . $user . '</td>
            <td style="text-align:center;height:50px">' . $pass . '</td>
            <td style="text-align:center;height:50px">' . $email . '</td>
            <td style="text-align:center;height:50px">' . $address . '</td>
            <td style="text-align:center;height:50px">' . $tel . '</td>
            <td style="text-align:center;height:50px">' . $role . '</td>
            <td style="text-align:center;height:50px"><a href="' . $suatk . '"><input type="button" value="Sửa" style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>

            <td style="text-align:center;height:50px"><a href="' . $xoatk . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');" ><input type="button" value="Xóa" style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
            </tr>';
  
}
?>
       </table>
   
       <div class="them">
            <a href="index.php?act=themtk">Thêm tài khoản</a>
    </div>


