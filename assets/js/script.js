function selectText() {
	var range = document.createRange();
	range.selectNode(document.getElementById('result'));
	window.getSelection().addRange(range);
	document.execCommand("copy");
	document.getElementById("message").style.display = "block";
}