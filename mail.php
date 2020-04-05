<?
// 1 ЭТАП
$data = []; // обьявление массива data
if(isset($_POST['name'])){$data['name'] = $_POST['name'];}
if(isset($_POST['tel'])){$data['tel'] = $_POST['tel'];}



// 2 этап, формирование письма
$email = 'mail@example.com';  // тип данных - строка
$to = 'mail@example.com';  // от кого (отправка)
// формирование письма
$mail = '';
$mail .= $data['name'];
$mail .= $data['tel'];

// (Этап след.)Отправка письма
if(mail($email, 'заявка с сайта', $mail)){     // Условие if(атрибуты усливия){то что должно выполниться}
echo 'сообщение успешно отправлено';
}
