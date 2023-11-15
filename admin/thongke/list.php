<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h3>Bảng thống kê</h3>
<div class="table" style="margin-top: 40px;margin-left: 40px;">
     <table border="1" cellspacing="0">
        <tr>
            <td style="width:50px;height:50px;font-weight: bold;text-align: center;">Mã danh mục</td>
            <td style="width:350px;height:50px;font-weight: bold;text-align: center;">Tên danh mục</td>
            <td style="width:70px;height:50px;font-weight: bold;text-align: center;">Số lượng</td>
            <td style="width:150px;height:50px;font-weight: bold;text-align: center;">Giá cao nhất</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Giá thấp nhất</td>
            <td style="width:250px;height:50px;font-weight: bold;text-align: center;">Giá trung bình</td>

     
        </tr>
    
    

     <?php
    foreach ($listthongke as $thongke) {
        extract($thongke);
       

        echo '<tr>
            <td style="text-align:center;">' . $madm. '</td>
            <td style="text-align:center;height:50px">' .$tendm. '</td>
            <td style="text-align:center;height:50px">' . $countsp. '</td>
            <td style="text-align:center;height:50px">' . $maxprice. '</td>
            <td style="text-align:center;height:50px">' . $minprice. '</td>
            <td style="text-align:center;height:50px">' . $avgprice. '</td>

            </tr>';
  
}
?>
       </table>
</div>
<br><br>
<a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ" style="width: 100px; height: 30px; background-color: green; color: white;"></a>
<br><br>



     