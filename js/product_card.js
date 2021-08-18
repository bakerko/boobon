



$(document).ready(function() {
	
	function change_tmp_quant(quant){
		let xhr = new XMLHttpRequest();
		xhr.open('post', '/home/change_tmp_quant/'+quant);
		xhr.send();	
	}
	
    $('.down').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
		
		change_tmp_quant(count);
		
        return false;
    });
	
    $('.up').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
		
		var count = parseInt($input.val());
		
        $input.change();
		
		change_tmp_quant(count);
		
        return false;
    });
	
});