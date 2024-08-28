<?php
if($_POST) {
    try {
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $mailInput = $_POST["mail1"];
        $select = $_POST["form1select"];
    
        } catch (\Throwable $th) {
            $name = "ERROR IN MESSAGE";
        }
    
        $token = "7176990752:AAFgJ-AVyV6WCpxgP9BqXjMyzUiYz8nFiJo";
        $chat_id = 5858755336;
    
        $name = urlencode("$name");
        $mail = urlencode("$mail");
        $mailInput = urlencode("$mailInput");
        $select = urlencode("$select");
    
        $urlQuery = "https://api.telegram.org/bot". $token . "/sendMessage?chat_id=". $chat_id ."&text=" .
        "<b>Заявка з сайту Forms: </b>%0a" .
        "<i>Ім'я замовника: $name</i>%0A" .
        "<i>Ел. пошта1: $mailInput</i>%0A" .
        "<i>Ел. пошта2: $mail</i>%0A" .
        "<i>Данні з селект: $select</i>%0A";
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents($urlQuery);
}
?>