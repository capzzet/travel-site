<?php
$to = "dota.bundle@bk.ru";
$from = trim($_POST['mail']);
$message = htmlspecialchars($_POST['phone']);
$message = urldecode($message);
$message = trim(htmlspecialchars($_POST['phone']));
$headers = "From: $from" . "\r\n" .
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/" . phpversion();
if(mail($to,$message,$headers)){
    echo "Отправлено";}
else {
    echo "Не отправлено";
}
?>