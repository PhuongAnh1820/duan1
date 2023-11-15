<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>LIST BÌNH LUẬN</h2>
<div class="table" style="margin-top: 40px;margin-left: 40px;">
     <table border="1" cellspacing="0">
        <tr>
         <td style="width:50px;"></td>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">ID</td>
            <td style="width:350px;height:50px;font-weight: bold;text-align: center;">Nội dung bình luận</td>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">ID User</td>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">ID Pro</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Ngày bình luận</td>
     
            <td style="width:70px;height:30px;font-weight: bold;text-align: center;">Xóa</td>
        </tr>
    
     </div>

     <?php
    foreach ($listbinhluan as $binhluan) {
        extract($binhluan);
        $suabl = "index.php?act=suabl&id_bl=".$id_bl;
        $xoabl = "index.php?act=xoabl&id_bl=".$id_bl;

        echo '<tr>
            <td style="text-align:center;height:50px"><input type="checkbox" name="" id=""></td>
            <td style="text-align:center;">' . $id_bl. '</td>
            <td style="text-align:center;height:50px">' . $noidung . '</td>
            <td style="text-align:center;height:50px">' . $iduser . '</td>
            <td style="text-align:center;height:50px">' . $idpro . '</td>
            <td style="text-align:center;height:50px">' . $ngaybinhluan . '</td>

            <td style="text-align:center;height:30px"><a href="' . $xoabl . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');"><input type="button" value="Xóa" style="width: 50px; height: 30px; background-color: green; color: white;"></a></td>
            </tr>';
  
}
?>
       </table>
   



     