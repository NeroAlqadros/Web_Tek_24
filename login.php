<?php

$kullanici_adi="b211210018@sakarya.edu.tr";
$sifre="b211210018";

if($kullanici_adi==$_POST['username'] && $sifre==$_POST['password'])
{
    echo "Ho�geldiniz b211210018 <br/>";
    echo " 5 saniye i�inde hakkimda sayfas�na y�nelendirileceksiniz";
    header("Refresh: 5; url=Hakkimda.html");

}
else{
    echo "Girilen bilgiler hatal�d�r. 3 saniye i�inde giri� ekran�na y�nelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>