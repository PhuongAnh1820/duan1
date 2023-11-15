<?php 
function insert_danhmuc($tendanhmuc){
    $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES ('$tendanhmuc')";
           pdo_execute($sql);
}

function delete_danhmuc($id_dm){
    $sql="delete from danhmuc where id_dm=".$_GET['id_dm'];
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql="select * from danhmuc";
     $listdanhmuc=pdo_query($sql);
     return $listdanhmuc;
}
function loadone_danhmuc($id_dm) {
    $sql="select * from danhmuc where id_dm=".$id_dm;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id_dm,$tendanhmuc){
    $sql = "update danhmuc set ten_danhmuc='".$tendanhmuc."' where id_dm=".$id_dm;
    pdo_execute($sql);
}
?>