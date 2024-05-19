<?php

$kullanici_adi="b211210018@sakarya.edu.tr";
$sifre="b211210018";

if($kullanici_adi==$_POST['username'] && $sifre==$_POST['password'])
{
    echo "Hoþgeldiniz b211210018 <br/>";
    echo " 5 saniye içinde hakkimda sayfasýna yönelendirileceksiniz";
    header("Refresh: 5; url=Hakkimda.html");

}
else{
    echo "Girilen bilgiler hatalýdýr. 3 saniye içinde giriþ ekranýna yönelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>