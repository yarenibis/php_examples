<?php
require_once 'baglan.php';

if(isset($_POST['kaydet'])){
     $usermail=$_POST['mail'];
     $pwd=$_POST['pwd'];
}

//veritabanına kayıt işlemi
$ekle="INSERT INTO users (user_mail, user_pwd) VALUES ('".$usermail."','".$pwd."')";
if($db->query($ekle)==TRUE){
   echo "<script>alert('mesaj başarı ile gönderildi')</script>";
 
}


?>