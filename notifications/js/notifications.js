(function (){

var openButton = document.querySelector("#noti-button"),
	noticesBox = document.querySelector("#notifications");

function openMe() {
	noticesBox.classList.toggle("shown");
}

openButton.addEventListener("click", openMe, false);

})();