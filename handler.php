<?php
//1
//mail('example@gmail.com','subject', 'line1 \n line2 \n line3');
// $to = 'example@gmail.com';
// $subject = "Заголовок письма";
// $message = '<p>Text</p> <br> <p>Text2</p>';


// mail(
//     string $to,
//     string $subject,
//     string $message,
//     array|string $additional_headers = [],
//     string $additional_params = ""
// ): bool


//2

// $to      = 'nobody@example.com';
// $subject = 'the subject';
// $message = 'hello';
// $headers = array(
//     'From' => 'webmaster@example.com',
//     'Reply-To' => 'webmaster@example.com',
//     'X-Mailer' => 'PHP/' . phpversion()
// );


//3
// несколько получателей
$to = 'fogon71664@carpetd.com'; // обратите внимание на запятую

// тема письма
$subject = 'Birthday Reminders for August';

// текст письма
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Дополнительные заголовки
// $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
// $headers[] = 'From: Birthday Reminder <birthday@example.com>';
// $headers[] = 'Cc: birthdayarchive@example.com';
// $headers[] = 'Bcc: birthdaycheck@example.com';

// Отправляем
// mail($to, $subject, $message, implode("\r\n", $headers));

if(mail($to, $subject, $message,  $headers))
 print('Сообщение для '.$to.' удачно отправлено!');
 else
 print('Ошибка');
?>

