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
$eml= htmlspecialchars($_POST['user_email']);
echo "<h2>Your email: $eml</h2>";

}if(empty($_POST['user_message'])){
    echo '<h2>A message required</h2>';
   
}else{
$msg= htmlspecialchars($_POST['user_message']);
echo "<h2>Your message: $msg</h2>";

}


?>