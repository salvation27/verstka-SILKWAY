    <?php if (!empty($_POST)) {
    $name3 = $_POST['name_3'];
    $phone3 = $_POST['phone_3'];
    $name3 = htmlspecialchars($name3);
    $phone3 = htmlspecialchars($phone3);
    $name3 = urldecode($name3);
    $phone3 = urldecode($phone3);
    $name3 = trim($name3);
    $phone3 = trim($phone3);

    mail("ikekshin@yandex.ru", "Заказ", "Имя: ".$name3."\r\nТелефон: ".$phone3 ,"From: обратный адрес \r\n");
} 
 ?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ваша заявка успешно отправлена</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 20px;
            padding: 20px;
        }
        .thank_title{
            font-size: 48px;
            font-family: 'HelveticaNeueCyr-Thin';
            font-weight: bold;
            margin-bottom: 20px;
        }
        .thank_text{
            font-size: 36px;
            font-family: 'HelveticaNeueCyr-Thin';
            font-weight: bold;
            position: relative;
            margin-bottom: 30px;
        }
        .thank_text:after{
            position: absolute;
            content: '';
            left: 0px;
            top: 110%;
            width: 100%;
            height: 2px;
            background: #21CEE3 url() 0 0 no-repeat;
        }
        .thank_text_2{
            font-size: 24px;
            font-family: 'Lora_regular';
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <div class="mod_thank_wrap">
                    <div class="thank_title">
                        Спасибо
                    </div>
                    <div class="thank_text">
                        Ваша заявка принята
                    </div>
                    <div class="thank_text_2">
                        Ожидайте, в ближайшее время с Вами свяжется наш менеджер
                    </div>
                </div>

            <?php if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']) { ?>
                <br><br><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" style="text-decoration: none; border-bottom: 1px dotted">Вернуться назад</a>
             <?php } ?>
        </div>
    </div>
</div>

</body>
</html>