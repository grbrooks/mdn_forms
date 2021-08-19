<?php
$email=($_POST['user_email']);
echo $email;
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if(empty($_POST['user_name'])){
    echo '<h2>A Name required<br></h2>';
}else{
$nme= ($_POST['user_name']);
echo "<h2>Your name: $nme</h2><br>";
}


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("<h2>$email is a valid email address</h2>");
  } else {
    echo("<h2>$email is not a valid email address</h2>");
  }
if(empty($_POST['user_message'])){
    echo '<h2>A message required</h2>';
   
}else{
$msg=($_POST['user_message']);
echo "<h2>Your message: $msg</h2>";
}