<?php

if(empty($_POST['user_name'])){
    echo '<h2>An Name required<br></h2>';
}else{
$nme= htmlspecialchars($_POST['user_name']);
echo "<h2>Your name: $nme</h2><br>";
}

if(empty($_POST['user_email'])){
    echo '<h2>An Email required</h2>';
   
}else{
$eml=$_POST['user_email'];
if(!filter_var($eml,FILTER_VALIDATE_EMAIL)
){
    echo '<h2>Email must be a valid email address</h2><br>';

}


}if(empty($_POST['user_message'])){
    echo '<h2>A message required</h2>';
   
}else{
$msg= htmlspecialchars($_POST['user_message']);
echo "<h2>Your message: $msg</h2>";

}


?>