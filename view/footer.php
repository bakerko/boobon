<link rel="stylesheet" href="/styles/modal.css">
<link rel="stylesheet" href="/styles/chat.css">

  <script src="/js/popup.js"></script>
  
  <style>
      
    .popuptext{    
        background-color: #D4ACB5;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px;
        
        position: fixed;
        
        z-index: 1;
        top: 50px;
        right: 50px;

        
        visibility: hidden;
    }
  
    .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }  
    
    .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
    }    
  
  </style>

<span class="popuptext" id="myPopup" >Ваш товар добавлен в корзину!</span>

<footer class="footer">
    <div class="flexbox container footer_landscape">
        <ul class="footer_landscape_item">
            <li class="title">ПОКУПАТЕЛЯМ</li>
            <li class="footer_link"><a class="blackbar__item" href="/home/delivery_payment">Доставка и оплата</a></li>
            <li class="footer_link"><a class="blackbar__item" href="/home/faq">Вопросы и ответы</a></li>
            <li class="footer_link"><a class="blackbar__item" href="/home/warranty">Гарантия и возврат</a></li>
        </ul>

        <ul class="footer_landscape_item">
            <li class="title">КОНТАКТЫ</li>
            <li class="footer_link"><a class="blackbar__item" href="tel:+38 (097) 07 07 219"><i class="fas fa-phone"></i> 097-07-07-219</a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><i class="fas fa-envelope"></i> boobon.dp@gmail.com</a>
            </li>
            <li class="footer_link insta_link"><a class="blackbar__item button" href="http://instagram.com/_u/boobon_balloon/"><img class="colored_icon"
                                                                                             src="/images/instagram-sketched.png"
                                                                                             alt=""><span
                    class="goToInsta">ПЕРЕЙТИ В INSTAGRAM</span> </a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">ПИШИТЕ НАМ</li>
            <li class="footer_link"><a class="blackbar__item" href="viber://chat?number=+380970707219"><img class="colored_icon" src="/images/viber.svg"
                                                                           alt=""><span
                    class="goToInsta">Viber</span></a></li>
            <li class="footer_link"><a class="blackbar__item" href="https://telegram.im/@boobon_balloon">

                    
                    <img class="colored_icon" src="/images/telegram.svg" alt="">
                    <span class="goToInsta">Telegram</span></a></li>
                    
              
            <!--          
            <li  id="myBtn_chat" class="footer_link"><img class="colored_icon chat" src="/images/chat.png" alt="">
                <span class="goToInsta">Чат на сайте</span></li>
                -->
            
        </ul>
    </div>
    
<!--     
    <div id="myChat" class="modal">

        
    <div class="modal-content chat-width">
        <img class="close close_left" src="/images/close.png" alt="">
        <div class="form-container">
            <p class="msg"><b><label for="msg"></label>Напишите Ваше сообщение</b></p><br>
            <p class="msg"><label for="msg"></label>Операторы online!</p>
            <div class="chat-area">
                
            </div>
            <textarea placeholder="Введите сообщение..."  name="msg" id="msg" required></textarea>

            <button class="send_button"  id="send_message"><i class="fas fa-arrow-circle-up"></i></button>
        </div>

    </div>
    </div>    
    -->
    
</footer>

<script src="/js/chat.js"></script>