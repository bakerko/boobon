<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/modal.js"></script>
    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
<?php echo view('header'); ?>  

<main class="container">
    
    <?php echo '<p class="path">'.$_SESSION['kroshki'].'</p>';?>  
    
    <div class="noMargin_flexbox column_view ">
        <div class="">
            <div class="noMargin_flexbox ">
                <ul class="big_container">
                    <li class="noMargin_flexbox bordered">
                        <span class="delivery"><img class="table_icon"
                                                    src="/images/contact.png"/><b>КОНТАКТЫ</b></span>
                    </li>
                    <li class="noMargin_flexbox bordered">
                        <form id="order_add" class="radio_inline" name="delivery" method="post" action="/home/order_add">
                            <p>Ваше имя<br>
                                <input name="name" class="input_item" type="text" size="40">
                            </p>
                            <p>Ваш телефон<br>
                                <input name="phone" class="input_item" type="text" size="40">
                            </p>
                        
                    </li>
                </ul>
            </div>
            <div class="checkout_box">

                <ul class="padding big_container">
                    <li class="noMargin_flexbox bordered">
                        <span class="delivery"><img class="table_icon"
                                                    src="/images/delivery.png"/><b>ДОСТАВКА</b></span>
                    </li>

                    <li class="noMargin_flexbox bordered">
                        
                        <div class="delivery_form">    
                            
                            <div id="group_delivery" class="radio_inline">
                                <input type="radio" id="city" name="type" value="1">
                                <label class="radio_item" for="city">Доставка по городу</label><br>

                                <input type="radio" id="np" name="type" value="2" checked>
                                <label class="radio_item" for="np" >Новая Почта</label>
                            </div>
                            <br>
                            <p class="text_reg">Выберите дату и желаемое время доставки. Условия доставки подтверждаются
                                оператором</p><br>
                            <input class="left_item input_item" id="start" type="date" name="date"
                                   value="2020-01-01"
                                   min="2020-01-01" max="2020-12-31">

                            <input class="left_item input_item" id="appt-time" type="time" name="time"
                                   value="12:00"></br>
                            <p class="text_reg">Адрес доставки / Номер отделения НОВОЙ ПОЧТЫ</p><br>
                            <input class="left_item input_item fullWidth table_input" type="text" id="adress" name="adress"
                                   placeholder="Например:     Киев, ул. Строителей, 1           /или/          Киев, НП-102"
                                   >
                            <input type="hidden"name="sum" value="">
                            <br>
                        </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="total tablet_total">
 
<!--            <div class="noMargin_flexbox">-->
<!--                <span class="font_xl">Доставка</span>-->
<!--                <div class="price font_xl">50 грн</div>-->
<!--            </div>-->
            <div class="noMargin_flexbox">
                <span class="font_xl"><strong>ИТОГО</strong></span>
                <div class="price font_xl"><strong><?php if(isset($_SESSION['total_price'])){echo $_SESSION['total_price'];}else{echo 0;}?>&nbsp; грн</strong></div>
            </div>
            <button  onclick="document.getElementById('order_add').submit();" class="button black_button font_xs">ПОДТВЕРДИТЬ ЗАКАЗ</button>
            <a href="/home"><button class="button white_button font_xs">ПРОДОЛЖИТЬ ПОКУПКИ</button></a>
        </div>
    </div>
</main>


<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>