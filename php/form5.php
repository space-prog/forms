<?php
if($_POST) {
    try {
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $phone = $_POST["phone"];
        $select = $_POST["select"];
        $location = $_POST["location"];
        $city = $_POST["city"];
        $house = $_POST["house"];
        $index = $_POST["index"];
        $checkBox = $_POST["checkbox"];
    
        } catch (\Throwable $th) {
            $name = "ERROR IN MESSAGE";
        }
    
        $token = "7176990752:AAFgJ-AVyV6WCpxgP9BqXjMyzUiYz8nFiJo";
        $chat_id = 5858755336;
    
        $name = urlencode("$name");
        $mail = urlencode("$mail");
        $phone = urlencode("$phone");
        $select = urlencode("$select");
        $location = urlencode("$location");
        $city = urlencode("$city");
        $house = urlencode("$house");
        $index = urlencode("$index");
        $checkBox = urlencode("$checkBox");
    
        $urlQuery = "https://api.telegram.org/bot". $token . "/sendMessage?chat_id=". $chat_id ."&text=" .
        "<b>Заявка з сайту Forms: </b>%0A" .
        "<b>Form5: </b>%0A" .
        "<i>Ім'я замовника: $name</i>%0A" .
        "<i>Ел. пошта: $mail</i>%0A" .
        "<i>Телефон: $phone</i>%0A" .
        "<i>Данні з селект: $select</i>%0A" .
        "<i>Адреса: $location</i>%0A" .
        "<i>Місто: $city</i>%0A" .
        "<i>Будинок: $house</i>%0A" .
        "<i>Поштовий Індекс: $index</i>%0A" .
        "<i>checkbox: $checkBox</i>%0A";
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents($urlQuery);
}
?>