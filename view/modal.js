var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var btn_side = document.getElementById("myBtn_side");
var btn_side2 = document.getElementById("myBtn_side2");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
};

close.onclick = function () {
    modal.style.display = "none";
};

btn_side.onclick = function () {
    modal.style.display = "block";
};

btn_side2.onclick = function () {
    console.log("btn_side2 press");
    modal.style.display = "block";
    
    closeNav();
};

window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
