<?php
if($_POST) {
    try {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $select = $_POST["select"];
        $radio = $_POST["stat"];
        $file = $_POST["File"];
        $textArea = $_POST["textarea"];
    
        } catch (\Throwable $th) {
            $name = "ERROR IN MESSAGE";
        }
    
        $token = "7176990752:AAFgJ-AVyV6WCpxgP9BqXjMyzUiYz8nFiJo";
        $chat_id = 5858755336;
    
        $name = urlencode("$name");
        $pass = urlencode("$pass");
        $select = urlencode("$select");
        $radio = urlencode("$radio");
        $file = urlencode("$file");
        $textArea = urlencode("$textArea");
    
        $urlQuery = "https://api.telegram.org/bot". $token . "/sendMessage?chat_id=". $chat_id ."&text=" .
        "<b>Заявка з сайту Forms: </b>%0A" .
        "<b>Form4: </b>%0A" .
        "<i>Ім'я замовника: $name</i>%0A" .
        "<i>Пароль: $pass</i>%0A" .
        "<i>Данні з селект: $select</i>%0A" .
        "<i>Радіо: $radio</i>%0A" .
        "<i>Файл: $file</i>%0A" .
        "<i>Коментар: $textArea</i>";
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents($urlQuery);
}
?>