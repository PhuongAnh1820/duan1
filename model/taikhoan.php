<?php 
function insert_taikhoan($email,$user,$pass,$address,$tel){
    $sql = "INSERT INTO taikhoan(email,user,pass,address,tel) VALUES ('$email','$user','$pass','$address','$tel')";
           pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND  pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}


function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id_ngdung, $user, $pass, $email, $address, $tel) {
  
        $sql = "update taikhoan set user = '".$user."', pass = '".$pass."',email = '".$email."',address = '".$address."',tel = '".$tel."' where id_ngdung = ".$id_ngdung;
   

    pdo_execute($sql);

}
function loadall_taikhoan(){
    $sql="select * from taikhoan";
     $listtaikhoan=pdo_query($sql);
     return $listtaikhoan;
}

function insert_khachhang($user,$pass,$email,$address,$tel,$role){
    $sql = "INSERT INTO taikhoan(user, pass, email, address, tel, role) VALUES ('$user', '$pass', '$email', '$address', '$tel', '$role')";
pdo_execute($sql);

}
function delete_taikhoan($id_ngdung){
    $sql="delete from taikhoan where id_ngdung=".$_GET['id_ngdung'];
    pdo_execute($sql);
}
  
function loadone_taikhoan($id_ngdung) {
    $sql="select * from taikhoan where id_ngdung=".$id_ngdung;
    $sp=pdo_query_one($sql);
    return $sp;
}


?>