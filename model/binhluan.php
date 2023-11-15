<?php 
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
           pdo_execute($sql);
}

function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binhluan WHERE 1 ";
    if ($idpro > 0)
        $sql .= "AND idpro = '" . $idpro . "' ";
    
    $sql .= "ORDER BY id_bl DESC";
    
    $listbl = pdo_query($sql);
    return $listbl;
    
}
function delete_binhluan($id_bl) {
    $sql = "DELETE FROM binhluan WHERE id_bl=" . $id_bl;
    pdo_execute($sql);
}

?>