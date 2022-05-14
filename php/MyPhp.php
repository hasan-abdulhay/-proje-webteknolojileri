<?php
$kullanici = array ("g201210585@gmail.com","G201210585@gmail.com","g201210585@sakarya.edu.tr","G201210585@sakarya.edu.tr");
$password = array ("g201210585" , "G201210585");
$kullanici1 = $_POST ['email'];
$password1 = $_POST ['password'];
if(in_array($kullanici1, $kullanici)&& in_array($password1, $password))
{
    echo "hoş geldiniz g201210585";
    echo "başarılı giriş";
    echo "your email is " . $_POST['email'] ."<br>" ;
}
else{
    echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın." ;
}

