<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гарантии</title>
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
                <span class="delivery"><i style="font-size: 30pt;" class="fas fa-shield-alt table_icon"></i><b>Гарантии</b></span>
        </li>

        <li class="noMargin_flexbox bordered"><p>Гарантия на полет воздушных шаров 3-5 дней . В данные условия гарантии входят латексные шары размером от 25 см обработанные полимером для длительного полета и фольгированные шары диаметром от 18 дюймов (45см)</p></li>
        <li class="noMargin_flexbox bordered"><p>Если вы обнаружили брак, сообщите нам об этом в течении 24 после получения товара и мы решим проблему </p></li>
        <li class="noMargin_flexbox bordered"><p>Все воздушные шары перед отправкой проходят проверку на брак</p></li>
        <li class="noMargin_flexbox bordered"><p>Фольгированные шары надуваются за 2 часа до отправки, в случае выявления брака шар заменяется на новый за счет компании. Бракованные шары сдуваются в течении 15 минут из-за большого давления в шаре</p></li>
        <li class="noMargin_flexbox bordered"><p>Латексные шары раздуваются воздухом, в случае брака шар лопается при надуве. Шары с видимыми повреждениями такие как: склейка, мелкие трещины, дырочки, неправильная форма или обрезанный хвостик утилизируются сразу же </p></li>
        <li class="noMargin_flexbox bordered"><p>Наша компания несет ответственность за шары с момента надува до доставки в руки получателя, далее вся ответственность за шары ложиться на покупателя</p></li>
        <li class="noMargin_flexbox bordered"><p>В случае если шар лопнул во время доставки- производится замена на такой же либо похожий шар, если произвести замену невозможно мы вернем Вам полную стоимость шарика</p></li>
        <li class="noMargin_flexbox bordered"><p>Гарантию на товары для праздника предоставляет официальный импортер, информацию смотри на упаковке</p></li>

    </ul>


</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>