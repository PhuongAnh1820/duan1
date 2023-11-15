<?php
function loadall_thongke() {
    $sql = "SELECT danhmuc.id_dm as madm, danhmuc.ten_danhmuc as tendm, count(sanpham.id_sp) as countsp, min(sanpham.price_sp) as minprice, max(sanpham.price_sp) as maxprice, avg(sanpham.price_sp) as avgprice ";
    $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id_dm = sanpham.iddm ";
    $sql .= "GROUP BY danhmuc.id_dm ORDER BY danhmuc.id_dm DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>
