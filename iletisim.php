<?php
 echo "Ad�: ".$_POST['name'];
 echo "<br><br>Soyad�: ".$_POST['surname'];
 echo "<br><br>Telefon No: ".$_POST['phone'];
 echo "<br><br>Adres: ".$_POST['adress'];
 echo "<br><br>Email: ".$_POST['email'];
 echo "<br><br>E�itim D�zeyi: ".$_POST['education'];
 echo "<br><br>Cinsiyet: ".$_POST['gender'];
 echo "<br><br>Kullan�c� Mesaj� :".$_POST['message'];
 echo "<br><br>�lke: ".$_POST['country'];
 echo "<br><br>�ehir: ".$_POST['city'];
 echo "<br><br>�l�e: ".$_POST['district'];
 if(isset($_POST['hobby'])) {
    $hobbies = $_POST['hobby'];
 
    echo '<br> <br>Se�ti�iniz hobiler:<br>';
  
    if (is_array($hobbies) || is_object($hobbies)){
      
        foreach ((array) $hobbies as $hobby) {
            echo ' -->   ' . $hobby . ' <br/>';

            }
    }
}
 else {
    echo '<br/> Hi� hobi se�mediniz.';
}
 ?>