<?php 
 include 'connect.php';
 ini_set("SMTP", "kaveri.nagunuri@karmanya.co.in");
 $header="From:kaveri.nagunuri@karmanya.co.in";
 $message=$_GET['message'];
 for($x=0;$x<count($_GET);$x++)
 {
     if($_GET["mail_$x"]){
         $to=$_GET["mail_$x"];
         $subject="NewsLetter";
         $body="Dear".$_GET["name_$x"]."\n\n $message";
         mail($to, $subject,$body, $header);
     }
     
 }
 echo "all  mails  has been processed";
 ?>
