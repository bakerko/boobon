


	function send_filter(){
		var sort =  document.getElementById('sort').value;
		
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				location.reload();
			}
		}
	
		xhr.open('post', '/home/send_filter/'+sort);
	
		xhr.send();		

	}


$(document).ready(function() {


	function update_filters(){
		var checked = []
		$("input[name='filters']:checked").each(function ()
		{
			checked.push(parseInt($(this).val()));
		});
		

		$(".product").each(function ()
		{
			let flag_visible=1;
			
			let filter_mas = $(this).data('filters');
			filter_mas = filter_mas.split(',');
			
			let filter_mas_int = [];
			filter_mas.map(function(element){
				if(element!=0)
					filter_mas_int.push(Number(element));
			});

			//console.log(filter_mas_int);
			
			checked.find(function (element, index, array){

					if(filter_mas_int.indexOf(Number(element))<0){
						flag_visible=0;
					}

			});
			
			if(flag_visible){
				$(this).show();
			}else{
				$(this).hide();
			}

			
		});		
	}	
	
	
	function show_all(){
		$(".product").each(function (){
			$(this).show();
		});				
	}
	

	$('.filters_drop_all').click(function () {
		$("input[name='filters']").each(function ()
		{
			$(this).prop( "checked", false );
		});		
		
		update_filters();
		show_all();
	});
	
	$('.filters_set_all').click(function () {
		$("input[name='filters']").each(function ()
		{
			$(this).prop( "checked", true );
		});		

		update_filters();
		show_all();
	});

	$('.filter_chk').click(function () {
		
		update_filters();
		
	});		


});