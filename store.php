<?php
 include 'dbcnx.php' ;
 $name=$_POST['Cname'];
 $email=$_POST['Cemail'] ;
 $pass=$_POST['Cpass'];
 $phone=$_POST['Cphone'];
 $adr=$_POST['Cadress'];

 $cnx -> exec('INSERT INTO customer(Cname, Cemail, Cpass , Cphone, Cadress) 
 VALUES (  "'.$name.'", "'.$email.'", "'.$pass.'", "'.$phone.'", "'.$adr.'") ');
header("location:index.php");

//modal
//alert.js