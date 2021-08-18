<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery&Payment</title>
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

<main class="container" style="min-height: 50vh;">
    
    <?php echo '<p class="path">'.$_SESSION['kroshki'].'</p>';?>  

    <ul class="big_container">
        <li class="noMargin_flexbox bordered">
                <span class="delivery"><img class="table_icon" src="/images/delivery.png"/><b>Ваш заказ отправлен на обработку. Ожидайте звонка нашего менеджера</b></span>
        </li>
    </ul>

 

</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>