<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "    hoş geldiniz " . $_POST['ad'] . "  " . $_POST['soyad']. "<br> "; 
echo "    sizin emailiniz: " . $_POST['email']. "<br> ";
echo "    sizin şifrenız: " . $_POST['password']. "<br> " ;
echo "    kullanıcı durumunuz: " . $_POST['rdio'] . "<br>";
echo "    kullanılan programlama dilleri: " . $_POST['select']  . "<br>";
?>   
</body>
</html>
