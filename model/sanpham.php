<?php 
function insert_sanpham($name_sp,$image_sp,$price_sp,$mota,$dacdiem,$iddm){
    $sql = "INSERT INTO sanpham(name_sp,image_sp,price_sp,mota,dacdiem,iddm) VALUES ('$name_sp','$image_sp','$price_sp','$mota','$dacdiem','$iddm')";
           pdo_execute($sql);
}

function delete_sanpham($id_sp){
    $sql="delete from sanpham where id_sp=".$_GET['id_sp'];
    pdo_execute($sql);
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name_sp like '%".$kyw."%'";
    }

    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id_sp asc";
     $listsanpham=pdo_query($sql);
     return $listsanpham;
}
function loadall_sanpham_home(){
    $sql = "SELECT * FROM sanpham ORDER BY id_sp ASC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10(){
    $sql = "SELECT * FROM sanpham ORDER BY luotxem DESC LIMIT 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id_sp) {
    $sql="select * from sanpham where id_sp=".$id_sp;
    $sp=pdo_query_one($sql);
    return $sp;
}

function load_ten_dm($iddm) {
    if($iddm>0){
    $sql="select * from danhmuc where id_dm=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten_danhmuc;
    }else{
        return "";
    }
}
function load_sanpham_cungloai($id_sp,$iddm) {
    $sql="select * from sanpham where iddm=".$iddm." AND id_sp <>".$id_sp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id_sp, $iddm, $name_sp, $image, $price_sp, $mota,$dacdiem) {
    // Thêm dấu phẩy (,) sau iddm và giữa các cột trong câu SQL
    if ($image != "") {
        $sql = "update sanpham set iddm = '".$iddm."', name_sp = '".$name_sp."', image_sp = '".$image."', price_sp = '".$price_sp."', mota = '".$mota."',dacdiem='".$dacdiem."' where id_sp = ".$id_sp;
    } else {
        $sql = "update sanpham set iddm = '".$iddm."', name_sp = '".$name_sp."', price_sp = '".$price_sp."', mota = '".$mota."',dacdiem='".$dacdiem."' where id_sp = ".$id_sp;
    }

    pdo_execute($sql);
}
?>