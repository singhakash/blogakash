<!DOCTYPE html>
<html lang=en>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/design.css">
<body>
<div class="container">
<h2>Akash Blog</h2>
<div class="navbars">
<ul>
<li><a href="/"  >Home</a></li>
<li><a href="tutorials.php">Tutorial</a></li>
<li><a href="contact.php" class="currentlink">Contact</a></li>

</ul>
</div>
<div class="topic">AKASH SINGH</div>
	
	<p> You can contact me to develop software based on technologies like c , c++, java, play framework, php,asterisk.Enter your details and query below  </p>

<?php

$name=$email=$query="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $query = test_input($_POST["query"]);
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ak434640@gmail.com';
$mail->Password = 'sonaltomar';
$mail->SMTPSecure = 'tls';
$mail->From=test_input($_POST["email"]);
$mail->FromName=test_input($_POST["name"]);
$mail->addAddress('ak434640@gmail.com', 'akash singh');
$mail->addReplyTo(test_input($_POST["email"]), test_input($_POST["name"]));
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Software Development';
$mail->Body    =test_input($_POST["query"]);
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}?>
<p style="color:green">
<?php echo 'Message has been sent';?></p>



<?php
 /*if(mail("ak434640@gmail.com","Software Development",$query,"From: $email\n")){
 echo "email send";
}else{
echo "not send";
}*/
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td>Name:</td><td><input type="text" name="name" required><td><br><br>
</tr>
<tr>
<td>Email id:</td><td><input type="email" name="email" required><td><br><br>
</tr>
<tr>
<td>Query:</td><td><textarea name="query" row="5" cols="40" required></textarea></td><br><br><br><br><br>
</tr>

<tr>
<td></td><td><input type="submit" value="Submit"></td>
</tr>
</table>
</form>

<div class="footer">
	<a>Copyright&copy by Akash Singh</a>
</div>

</div>

	

</body>
</html>