function show_popup(name) {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
	
	popup.innerHTML='Товар<br>' +name+'<br>добавлен в корзину';

	setTimeout(() =>{
		popup.classList.remove("show");
	}, 3000);
}
