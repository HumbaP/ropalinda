

document.addEventListener("DOMContentLoaded", function(event) { 
	var base_url = document.getElementById("base").value;
	base_url = base_url+"public/";
	
	function loadTopTrending(){
		for (var i = 0; i<10; i++) {
			var hex = document.getElementById('topTrending'+i);
			hex.style.backgroundImage = "url('"+base_url+"img/offline/top_trending/toptrending"+i+".jpg')";
		}
	}

	loadTopTrending();

});

