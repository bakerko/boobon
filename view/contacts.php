<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
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
            <span class="delivery"><i style="font-size: 30pt;" class="fas fa-phone table_icon" src=""></i><b>Контакты</b></span>
        </li>

        <li>
            <div style="margin-left: calc(50% - 300px);" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10581.384429834186!2d35.0474254!3d48.4690745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa1332b77b8ee413!2zQk9PQk9OINCz0LXQu9C40LXQstGL0LUg0YjQsNGA0Ysg0LTQvdC10L_RgA!5e0!3m2!1sru!2sua!4v1629371572192!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </li>
        <li class="noMargin_flexbox bordered"><p>Телефон</p></li>
        <li class="noMargin_flexbox bordered"><p>Мейл</p></li>
        <li class="noMargin_flexbox bordered"><p>Инстаграм</p></li>

    </ul>


</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>