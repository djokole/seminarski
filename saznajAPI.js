$(document).ready(function() {	


	$("#select").change(function() {
		var rad = $("input[name='podatak']:checked").val();
		var select = document.getElementById('select');
		var gameval = select.value;
		var settings = {
			"async": true,
			"crossDomain": true,
			"url": `https://rawg-video-games-database.p.rapidapi.com/games/${gameval}`,
			"method": "GET",
			"headers": {
				"x-rapidapi-host": "rawg-video-games-database.p.rapidapi.com",
				"x-rapidapi-key": "ab10fa93b4msh19e08c31b3bcce2p1abeb1jsn3c9a04c9349e"
			}
		}
		$("#prikaznaslov").empty();
		$("#prikaztekst").empty();
		$.ajax(settings).done(function (response) {
			$("#prikaznaslov").append(response.name_original);
			if (rad == "opis") {
				$("#prikaztekst").append(response.description);
			}
			if (rad == "slika") {
				$("#prikaztekst").append(`<img id='theImg' src='${response.background_image}'/>`);
			}
		});
	});

	$('input[name="podatak"]').on('change', function(){
    var rad = $("input[name='podatak']:checked").val();
		var select = document.getElementById('select');
		var gameval = select.value;
		var settings = {
			"async": true,
			"crossDomain": true,
			"url": `https://rawg-video-games-database.p.rapidapi.com/games/${gameval}`,
			"method": "GET",
			"headers": {
				"x-rapidapi-host": "rawg-video-games-database.p.rapidapi.com",
				"x-rapidapi-key": "ab10fa93b4msh19e08c31b3bcce2p1abeb1jsn3c9a04c9349e"
			}
		}
		$("#prikaznaslov").empty();
		$("#prikaztekst").empty();
		$.ajax(settings).done(function (response) {
			$("#prikaznaslov").append(response.name_original);
			if (rad == "opis") {
				$("#prikaztekst").append(response.description);
			}
			if (rad == "slika") {
				$("#prikaztekst").append(`<img id='theImg' src='${response.background_image}'/>`);
			}
		});
	});
});