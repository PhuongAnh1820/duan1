<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<div class="table" style="margin-top: 40px;margin-left: 40px;">
     <table border="1" cellspacing="0">
        <tr>
         <td style="width:50px;"></td>
            <td style="width:30px;height:50px;font-weight: bold;text-align: center;">Mã </td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Tên danh mục</td>
            <td style="width:300px;height:50px;font-weight: bold;text-align: center;">Sửa</td>
            <td style="width:300px;height:50px;font-weight: bold;text-align: center;">Xóa</td>
        </tr>
    
     </div>

     <?php
if (isset($listdanhmuc) && is_array($listdanhmuc)) {
    foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        $suadm = "index.php?act=suadm&id_dm=".$id_dm;
        $xoadm = "index.php?act=xoadm&id_dm=".$id_dm;

        echo '<tr>
            <td style="text-align:center;height:50px"><input type="checkbox" name="" id=""></td>
            <td style="text-align:center;height:50px">' . $id_dm . '</td>
            <td style="text-align:center;height:50px">' . $ten_danhmuc . '</td>
            <td style="text-align:center;height:50px"><a href="' . $suadm . '"><input type="button" value="Sửa" style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
            <td style="text-align:center;height:50px"><a href="' . $xoadm . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');"><input type="button" value="Xóa"style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
            </tr>';
    }
} else {
    echo "Không có dữ liệu danh mục hoặc biến \$listdanhmuc không tồn tại.";
}
?>
       </table>
   



     <div class="them">
            <a href="index.php?act=adddm">Thêm danh mục</a>
    </div>
