	<?php
		include_once("config.php");
		$name = $_POST["name"];
		$tel = $_POST["tel"];
		$email = $_POST["email"];
		$messages = $_POST["messages"];
        $subject = "Заявка - ПОЛУЧИТЬ КП"; /*Тема письма*/
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: <test@mail.ru>\r\n";/*ОТ КОГО*/

		$message = "Заявка - ПОЛУЧИТЬ КП<br>";
        $message .= "<br>Имя: ".$name;
		$message .= "<br>Номер телефона: ".$tel; 
		$message .= "<br>Email: ".$email;
		$message .= "<br>Сообщение: ".$messages;

        $send = mail($to, $subject, $message, $headers);

        if ($send == "true")
        {
            echo "Ваше заявка отправлена. Мы ответим вам в ближайшее время.\r\n";
        }
        else
        {
            echo "Не удалось отправить, попробуйте снова!";
        }

?>