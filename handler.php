<?php

if(empty($_POST['user_name'])){
    echo 'An Name required<br>';
}else{
$nme= htmlspecialchars($_POST['user_name']);
}
if(empty($_POST['user_email'])){
    echo 'An Email required';
}else{
$eml= htmlspecialchars($_POST['user_email']);
}
echo "$nme<br>";
echo $eml;
?>