function showMessage(message) {
	alert(message);
}

function appendDivContent() {
	var div1 = document.getElementById('div1');
	var txt = document.getElementById('txtInput');
	div1.innerHTML += txt.value;
}

function changeDivColor() {
	var div1 = document.getElementById('div1');
	div1.style.color = "red";
}

function showDiv() {
	var div1 = document.getElementById('div1');
	div1.style.display = "block";
}

function hideDiv() {
	var div1 = document.getElementById('div1');
	div1.style.display = "none";
}