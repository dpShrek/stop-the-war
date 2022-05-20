<?php
$to = "info@stop-the-war.org.ua";//Почтовый ящик на который будет отправленно сообщение
  $subject = "Тема сообщения";//Тема сообщения
  $message = "Message, сообщение!";//Сообщение, письмо
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения, содержит определение типа письма, от кого, и кому отправить ответ на письмо
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Поочередно проверяем или были переданные параметры формы, или они не пустые
		if(isset($_POST["username"])){
			//Если параметр есть, присваеваем ему переданое значение
			$name 		=trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number 	= trim(strip_tags($_POST["usernumber"]));
		}
		if (isset( $_POST["question"])) {
			$question 	=trim(strip_tags($_POST["question"]));
		}
			// Формируем письмо
			$message  = " ";
				$message  .= " ";
				$message  .= "Почта для контакта: ".$number;
				$message  .= " ";
				$message  .= "Имя: ".$name;
				$message  .= " ";
				$message  .= "Вопрос: ".$question;
				$message  .= " ";
			$message  .= " ";
			// Окончание формирования тела письма
			// Посылаем письмо
			mail ($to, $subject, $message, $headers);
			$messagess = "Ваше сообщение отправленно!";
			echo "<script type='text/javascript'>alert('$messagess');</script>";
			
			header("Location: https://stop-the-war.org.ua/message-sent-successfully.html");
			
}
?>