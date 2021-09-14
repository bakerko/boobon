<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вопросы и ответы</title>
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
                <span class="delivery"><i style="font-size: 30pt;" class="far fa-comment table_icon"></i><b>ВОПРОСЫ И ОТВЕТЫ</b></span>
        </li>

        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Сколько летают воздушные шарики из латекса?</p></li>
        <li class="noMargin_flexbox bordered">   
            <p>Мы обрабатываем все латексные шарики специальным составом Ultra Hi-Float, который значительно увеличивает время полета. Шары размером менее 30 см будут летать 1-3 дня, а шарики размером от 30 см и больше – от 3 дней до нескольких недель.
        </p></li>
        
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Сколько летают фольгированные шарики?</p></li>
        <li class="noMargin_flexbox bordered">
            <p>Фольгированные воздушные шарики, в свою очередь, не нуждаются в обработке Ultra Hi-Float. Они сделаны из более плотного материала и способны летать около 2ух недель.
        </p></li>  
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Какие еще факторы могут повлиять на время полета воздушных шариков?</p></li>
        <li class="noMargin_flexbox bordered">
            <p>Следует также учитывать, что на время полета шаров может сократиться ввиду таких внешних факторов, как прямые солнечные лучи, высокая влажность воздуха и сильный ветер.
        </p></li>
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Что такое Ultra Hi-Float?</p></li>
        <li class="noMargin_flexbox bordered">
            <p>Ultra Hi-Float – это водный раствор жидкой пластмассы, которым следует обрабатывать воздушные шарики для максимальной продолжительности полета. Шарик смазывается им изнутри и затем надувается. В течение следующих 2-3 часов жидкость постепенно засыхает, создавая дополнительный защитный слой, который не дает гелию быстро покинуть шарик. Тем самым, срок полета воздушного шара может возрасти на несколько дней, а может и недель, в зависимости от различных внешних факторов. Стоит также отметить, что Hi-Float не токсичен и абсолютно безопасен для кожи человека.
        </p></li>  
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Из какого материала изготовлены воздушные шары?</p></li>
        <li class="noMargin_flexbox bordered">
            <p>Все наши шарики изготовлены из высокопрочных натуральных материалов: латекса и фольги в зависимости от типа шарика.
        </p></li>
        
        <li class="noMargin_flexbox bordered"><p style="font-weight:bold">Можно ли самому забрать воздушные шары?</p></li>
        <li class="noMargin_flexbox bordered">
            <p>Да, Вы можете воспользоваться услугой самовывоза из нашего магазина по адресу улица Владимира, 5 и сэкономить на доставке. О заказе следует уведомлять за 2-3 часа до приезда, чтобы его успели подготовить.
        </p></li>
    
    </ul>


</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>