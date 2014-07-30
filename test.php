<html>
<head><title>Send Mail</title></head>
<body >



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
$mail->From-=test_input($_POST["email"]);
$mail->FromName=test_input($_POST["name"]);
$mail->addAddress(test_input($_POST["email"]), test_input($_POST["name"]));
$mail->addReplyTo(test_input($_POST["email"]), test_input($_POST["name"]));
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Software Development';
$mail->Body    =test_input($_POST["query"]);
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';




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

</body>
</html>
