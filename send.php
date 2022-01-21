<?php

#От кого
$from = "prizuvnik@udm.ru";

#Для кого
$to = "anna@udm.ru";

#Название, тема письма
$name = "Новый клиент - Призывник";
$subject = "Новый клиент";

$message = '
<div style="font-family:Arial, sans-serif">
    <h1>Внимание!</h1>
    <h3>У вас новая заявка на бесплатную консультацию!</h3>
    Вот детали клиента:<br>
    ФИО: <b>'.$_POST['name'].'</b><br>
    Номер телефона: <b>'.$_POST['phone'].'</b><br>
</div>
';

# Дополнительные заголовки
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: '.$name.' <'.$from.'>' . "\r\n";

# Отправляем
try {
    mail($to, $subject, $message, $headers);
    die("Успех");
} catch(Exception $e) {
	die("Ошибка! Письмо не отправлено!");
}