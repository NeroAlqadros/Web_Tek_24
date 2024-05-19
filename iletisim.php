<?php
 echo "Adý: ".$_POST['name'];
 echo "<br><br>Soyadý: ".$_POST['surname'];
 echo "<br><br>Telefon No: ".$_POST['phone'];
 echo "<br><br>Adres: ".$_POST['adress'];
 echo "<br><br>Email: ".$_POST['email'];
 echo "<br><br>Eðitim Düzeyi: ".$_POST['education'];
 echo "<br><br>Cinsiyet: ".$_POST['gender'];
 echo "<br><br>Kullanýcý Mesajý :".$_POST['message'];
 echo "<br><br>Ülke: ".$_POST['country'];
 echo "<br><br>Þehir: ".$_POST['city'];
 echo "<br><br>Ýlçe: ".$_POST['district'];
 if(isset($_POST['hobby'])) {
    $hobbies = $_POST['hobby'];
 
    echo '<br> <br>Seçtiðiniz hobiler:<br>';
  
    if (is_array($hobbies) || is_object($hobbies)){
      
        foreach ((array) $hobbies as $hobby) {
            echo ' -->   ' . $hobby . ' <br/>';

            }
    }
}
 else {
    echo '<br/> Hiç hobi seçmediniz.';
}
 ?>