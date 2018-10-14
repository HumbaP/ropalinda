

document.addEventListener("DOMContentLoaded", function(event) { 

	document.getElementsByTagName('select')[0].onchange = function() {
		var index = this.selectedIndex;
		var inputText = this.children[index].value.trim();
		var label = document.getElementById("identifier-label");
		label.innerHTML = inputText;
	}

});


