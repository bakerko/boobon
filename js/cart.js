	function add_from_card(id, price){
		var quant = document.getElementById('quant').value;
		
		add_product_js(id, price, quant);
	}
	

	
	
	
	function add_product_js(id, price, quant){
		let xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				
				var element = document.getElementById('total_price');
				if(element)
					element.innerHTML=xhr.response;
				
				var element2 = document.getElementById('total_price_head');
				if(element2)
					element2.innerHTML=xhr.response;
				
			}
		}
	
		xhr.open('post', '/home/add_product_js/'+id+'/'+price+'/'+quant);
		xhr.send();			
	}
	
	function add_product_from_mix_js(id){
		let xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				
				var element = document.getElementById('total_price');
				if(element)
					element.innerHTML=xhr.response;
				
				var element2 = document.getElementById('total_price_head');
				if(element2)
					element2.innerHTML=xhr.response;
				
			}
		}
	
		xhr.open('post', '/home/add_product_from_mix_js/'+id);
		xhr.send();			
	}

$(document).ready(function() {

	function change_product_quant(id, quant){
		let xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				
				$("#total_price").html(xhr.response);
				$("#total_price_head").html(xhr.response);
			}
		}
	
		xhr.open('post', '/home/change_product_quant/'+id+'/'+quant);
		xhr.send();	
	}

	
	function add_default_product(id, price, type){
		let xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				
				$("#total_price").html(xhr.response);
				$("#total_price_head").html(xhr.response);
			}
		}
	
		xhr.open('post', '/home/add_default_product/'+id+'/'+price+'/'+type);
		xhr.send();	
	}

	
	
    $('.down').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
		
		let tmp_id = $input.attr('id');

		change_product_quant(tmp_id, count);
		
        return false;
    });
	
    $('.up').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
		
		var count = parseInt($input.val());
		let tmp_id = $input.attr('id');
		change_product_quant(tmp_id, count);
		
        return false;
    });
	
    $('.cart_checkbox').click(function () {
		
		var checked=$(this).is(":checked");
		
		let price = $(this).data('price');
		let id = $(this).data('id');
		
		
		
		let type=0;
		if(checked)type=1;
		
		//alert(price+' '+id+' '+type);
		
		add_default_product(id, price, type);

    });	
	
	
});