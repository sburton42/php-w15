function appendText() {
	alert("using jQuery!");
	var text = $("#txtInput").val();
	$("#div1").append(text);

}

function hideDiv() {
	//document.getElementById("div1").style.display = "none";
	$("#div1").fadeOut(2000);
}

function showDiv() {
	$("#div1").fadeIn(2000);
}
