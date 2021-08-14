
<?php 
require_once 'QuickForm.php';
 $name = $_POST['user_name'];
 $email_address = $_POST['user_email'];
 $message=$_POST['user_message'];
 echo "<h2>Your name: $name</h2><br>";
 if(empty($_POST['email_address'])){
     echo 'An email required';
 }else{
     echo <h2>$email_address</h2>
 }
