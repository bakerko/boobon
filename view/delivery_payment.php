<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Доставка и оплата</title>
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

    <ul class="big_container">
        <li class="noMargin_flexbox bordered">
                <span class="delivery"><img class="table_icon" src="/images/delivery.png"/><b>Доставка и оплата</b></span>
        </li>

        <li class="noMargin_flexbox bordered">
            <p>Доставка воздушных шаров осуществляется КРУГЛОСУТОЧНО по предварительной договоренности по г.Днепр и за его пределами + 40 км </p>
        </li>
        
        <li class="noMargin_flexbox bordered">
            <p>Срочные заказы доставляются в течении 2-3 часов с момента оформления заказа</p>
        </li>
        
        <li class="noMargin_flexbox bordered">
            <p>Доставка товаров для праздника осуществляется с помощью компании Новая почта по тарифам компании либо самовывозом</p>
        </li>
        
        
    </ul>

    <ul class="padding big_container">
        <li class="noMargin_flexbox bordered">
            <span class="delivery"><img class="table_icon" src="/images/people.png"/><b>САМОВЫВОЗ</b></span>
        </li>

        <li class="noMargin_flexbox bordered"><p>Самовывоз осуществляется по адресу: Ул. Троицкая 16
Увидеть наш адрес и проложить маршрут можно в разделе Контакты. 
Удобная парковка возле офиса, для вывоза шаров
</p></li>
        <li class="noMargin_flexbox bordered"><p>КАКОЕ Количество шаров вы сможете увезти?:
Легковой автомобиль до 50 шаров размером 25-30 см
На универсале либо кроссовере до 75 шаров
Коробка с шарами помещается в автомобиль универсал и более крупные авто, при условии разложенного заднего сидения и пустого багажника
</p></li>
        <li class="noMargin_flexbox bordered"><p>ВАЖНО ЗНАТЬ: При перемещении шаров в автомобиле обзор будет сильно затруднен, так как шары закроют обзор зеркала заднего вида. </p></li>
        <li class="noMargin_flexbox bordered"><p>На общественном транспорте можно увезти до 20 шаров</p></li>
        <li class="noMargin_flexbox bordered"><p>В случае Самовывоза Обязательно приобретайте пакеты для транспортировки шаров. Это позволит избежать повреждений во время транспортировки и упростит Вам способ перемещения шаров</p></li>
    </ul>
    

    <ul class="padding big_container">
        <li class="noMargin_flexbox bordered">
            <span class="delivery"><img class="table_icon" src="/images/pay.png"/><b>ОПЛАТА</b></span>
        </li>

        <li class="noMargin_flexbox bordered">
            <p>Все заказы сделанные онлайн, надуваются исключительно по предоплате. Предоплата на заказ составляет 100 грн, в случае если сумма заказа меньше 1000 грн. На заказы сумма которых превышает 1000 грн, предоплата составит не менее 20%.
            </p>
        </li>
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Оплата наличными</p></li>
        <li class="noMargin_flexbox bordered">
            <p>
             Самый простой способ оплатить Ваш заказ - отдать наличные курьеру при получении воздушных шариков. По Вашему желанию Вы можете предварительно заказать шры в нашем магазине или онлайн в соцсетях.   
            </p>
        </li>
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Безналичная оплата на расчетный счет</p></li>
        <li class="noMargin_flexbox bordered">
            <p>
                Вы являетесь юридическим лицом? Мы выставим Вам счет и подготовим все необходимые документы для бухгалтерии. Вам не о чем беспокоиться, все будет сделано точно в срок!
            </p>
        </li>      
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Оплата банковской картой</p></li>
        <li class="noMargin_flexbox bordered">
            <p>
                Оплатить заказ банковской картой возможно в нашем магазине по адресу улица Троицкая 16, с помощью терминала. 
            </p>
        </li>    
        
    </ul>

</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>