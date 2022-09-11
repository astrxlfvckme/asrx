<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$name= htmlspecialchars($name);
$email= htmlspecialchars($email;
$text= htmlspecialchars($text);
 

$name= urlencode($name);
$email=urlencode($email;
$text= urlencode($text);

$name= trim($name);
$email= trim($email;
$text= trim($text);

if mail("axuet55@gmail.com",
"новое письмо с сайта",
"Имя: ".$name."\n".
"Почта: ".$email."\n".
"Текст: ".$text."\n".
"From: no-reply@mydomain.com \r\n")
){
    echo('Ваш высер успешно отправлен!');

}
else{
    echo('ошибка далбаеб проверь правильность...');
}
?>