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

 
<?

    if(isset($products)){
        echo '

            <script>
                gtag(\'event\', \'purchase\', {
                  "transaction_id": "24.031608523954162",
                  "affiliation": "Google online store",
                  "value": '.$total_price.',
                  "currency": "UAH",
                  "tax": 1.24,
                  "shipping": 0,
                  "items": [
                  ';


        foreach($products as $product){

            $product->quant=$cart_list[$product->id];
            echo  '

                {
                  "id": "'.$product->id.'",
                  "name": "'.$product->name.'",
                  "list_name": "Search Results",
                  "brand": "MyBrand",
                  "category": "Apparel/T-Shirts",
                  "variant": "Red",
                  "list_position": 2,
                  "quantity": '.$product->quant.',
                  "price": \''.$product->price.'\'
                },

            ';

        }

        echo '           
                    ]
                  });

            </script>
        ';
    }



if(isset($products)){
        echo '

            <script>
            var dataLayer = window.dataLayer || [];
            dataLayer.push({
              \'event\': \'purchase\',
              \'value\': \''.$total_price.'\',
              \'items\': [
                  ';


        foreach($products as $product){

            $product->quant=$cart_list[$product->id];
            echo  '
                
                {
                      \'id\': \''.$product->id.'\',
                      \'google_business_vertical\': \'retail\'
                },

            ';

        }

        echo '           
                    ]
                  });

            </script>
        ';
    }

?>    
    
    



</main>

<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

</body>
</html>