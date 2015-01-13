function showMessage(message) {
	alert(message);
}

function appendDivContent() {
	var text = $("#txtInput").val();
	$("#div1").append(text)
}

function changeDivColor() {
	$("#div1").css("color", "red");
}

function showDiv() {
	//$("#div1").show();
	$("#div1").fadeIn(2000);
}

function hideDiv() {
	//$("#div1").hide();
	$("#div1").fadeOut(2000);
}

function hitServer() {
	var inputText = $("#txtInput").val();

	$.ajax({
		url: "echo.php",
		data: {text: inputText},
		success: function(data) {
			$("#div1").html(data);
		}

	});
}