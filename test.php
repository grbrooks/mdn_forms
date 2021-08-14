
<?php 
 $name = $_POST['user_name'];
 $email_address = $_POST['user_email'];
 $message=$_POST['user_message'];
 $date=date('d/m/y');
 echo "<h2>Your name: $name</h2><br>";
echo "<h2>Your Email: $email_address<br></h2>";
 echo"<h3>Message :$message</h3>";
 echo "<h2>$date</h2>";


