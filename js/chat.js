var chatWindow = document.getElementById("myChat");

var close = document.getElementsByClassName("close_left")[0];



close.onclick = function () {
    chatWindow.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == chatWindow) {
        chatWindow.style.display = "none";
    }
};





	
	
$(document).ready(function() {
	
	function send_message(message){
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				

				  var xmlDoc = xhr.response;
				  
				  var all_text='';

				  $(xmlDoc).find("message").each(function () {
	
						
						var tmp_mes=$(this).find("mes").text();
						
						var tmp_time=Number($(this).find("time").text());
						
						var tmp_type=$(this).find("type").text();

						var newdate;
						date = new Date(tmp_time*1000);
						newdate = date.getDate() + '.' + date.getMonth() + '.' + date.getFullYear() + ' ' + date.getHours() + ':' + date.getMinutes() ;

						
						if(tmp_type==0)
							tmp_message='<div class="left_side_chat"><div><time>'+newdate+'</time><p>'+tmp_mes+'</p></div></div><br>';
						else
							tmp_message='<div class="right_side_message"><div><time>'+newdate+'</time><p>'+tmp_mes+'</p></div></div><br>';
						
						all_text=all_text+tmp_message;
				  });
				  
					$(".chat-area").html(all_text);

					
					scroll_bot();
				
			}
		}
	
		xhr.open('post', '/home/chat_add_message/'+message);

				
		xhr.send();
	}	
	
	
	function show_messages(){
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				

				  var xmlDoc = xhr.response;

				  var all_text='';

				  $(xmlDoc).find("message").each(function () {
	
						
						var tmp_mes=$(this).find("mes").text();
						
						var tmp_time=Number($(this).find("time").text());
						
						var tmp_type=$(this).find("type").text();

						var newdate;
						date = new Date(tmp_time*1000);
						
						var tmins=date.getMinutes();
						var min_text='';
						if(tmins<10)
							min_text='0'+tmins;
						else
							min_text=tmins;
						
						
						newdate = date.getDate() + '.' + date.getMonth() + '.' + date.getFullYear() + ' ' + date.getHours() + ':' + min_text ;

						
						
						if(tmp_type==0)
							tmp_message='<div class="left_side_chat"><div><time>'+newdate+'</time><p>'+tmp_mes+'</p></div></div><br>';
						else
							tmp_message='<div class="right_side_message"><div><time>'+newdate+'</time><p>'+tmp_mes+'</p></div></div><br>';
						
						all_text=all_text+tmp_message;
				  });
				  
					$(".chat-area").html(all_text);
					
					scroll_bot();
				
				
			}
		}
	
		xhr.open('post', '/home/chat_get_messages/');

				
		xhr.send();
	}	
	
	
	function scroll_bot(){
					
		var div = $(".chat-area");
		div.scrollTop(div.prop('scrollHeight'));
	}
		
	
	show_messages();
	
	$('#myBtn_chat').click(function () {
		chatWindow.style.display = "block";
		scroll_bot();

	});
	

	$('#send_message').click(function () {
		
		var message = $('#msg').val();
		$('#msg').val('');
		
				
		send_message(message);
		
	});
	
});