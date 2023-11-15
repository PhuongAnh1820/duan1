
<link rel="stylesheet" href="./css/quantri.css">

    
<div class="table" style="margin-top: 40px;margin-left: 40px;">
<form action="" method="post">
    <input type="text"name="kyw">
    <select name="iddm">
        <option value="0" selected>Tất cả</option>
            <?php 

             foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id_dm . '">' . $ten_danhmuc . '</option>';
            }
            ?>
            
         </select>

         <input type="submit" value="Tìm kiếm" name="listok" style="width: 100px; height: 20px; background-color:orangered; color: white;font-weight: bold;">
    <br><br>
</form>
     <table border="1" cellspacing="0">
        <tr>
         
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Tên sản phẩm</td>
            <td style="width:150px;height:50px;font-weight: bold;text-align: center;">Ảnh</td>
            <td style="width:100px;height:50px;font-weight: bold;text-align: center;">Giá</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Mô tả</td>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">View</td>
            <td style="width:100px;height:50px;font-weight: bold;text-align: center;">Đặc điểm</td>

            <td style="width:100px;height:50px;font-weight: bold;text-align: center;">Sửa</td>
            <td style="width:100px;height:50px;font-weight: bold;text-align: center;">Xóa</td>
        </tr>
    
     </div>

     <?php
     

    foreach ($listsanpham as $sanpham) {

       
        extract($sanpham);
        $suasp = "index.php?act=suasp&id_sp=".$id_sp;
        $xoasp = "index.php?act=xoasp&id_sp=".$id_sp;
        $hinhpath="../upload/".$image_sp;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."'height='80'>";
        }else{
         $hinh="Khong co hinh";
        }

        echo '<tr>
            <td style="text-align:center;height:50px">' . $name_sp . '</td>
            <td style="text-align:center;height:50px;">' . $hinh . '</td>
            <td style="text-align:center;height:50px">' . $price_sp . '</td>
            <td style="text-align:center;height:50px">' . $mota. '</td>
            <td style="text-align:center;height:50px">' . $luotxem . '</td>
            <td style="text-align:center;height:50px">' . $dacdiem . '</td>

            <td style="text-align:center;height:50px"><a href="' . $suasp . '"><input type="button" value="Sửa" style="width: 50px; height: 30px; background-color: green; color: white;"></a></td>
            <td style="text-align:center;height:50px">
            <a href="' . $xoasp . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');">
                <input type="button" value="Xóa" style="width: 50px; height: 30px; background-color: green; color: white;">
            </a>
        </td>            </tr>';
    }

?>
       </table>
   



     <div class="them">
            <a href="index.php?act=addsp">Thêm sản phẩm</a>
    </div>
