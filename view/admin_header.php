
<body>
<header>

    <div class="search_block">
        <div class="container flexbox flex_mob">
            <div><a href="/home/"><img class="logo" src="/images/logo.jpg"/></a></div>
            <div class="search_field">
                <form id="search" method="post" action="/home/search">
                    <input class="form-control" type="text" aria-label="Search" name="search_text">
                    <img onclick="document.getElementById('search').submit();" class="search_img" src="/images/search.png"/>
                </form>
            </div>
           
        </div>
    </div>
</header>


<br>
<nav class="navbar">
    <ul class="blackbar topmenu container">
        <li><a class="blackbar__item" href="/home/admin_product">Товары</a>
        </li>
        <li><a class="blackbar__item" href="/home/admin_decoration">Оформление</a>
        </li>
        <li><a class="blackbar__item" href="/home/admin_filter">Фильтры</a>
        </li>
        <li><a class="blackbar__item submenu_link" href="/home/admin_product_mix">Сборные товары</a>
        </li>
        <li><a class="blackbar__item" href="/home/admin_chat">Сообщения (чат)</a>
        </li>
        <li><a class="blackbar__item submenu_link" href="/home/admin_orders">Заказы</a>
        </li>

    </ul>
</nav>
