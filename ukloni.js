$(document).ready(function() {
	$("#ukl").click(function() {
		var $vrednost = $("#odabrana_igrica").val();
		$.ajax({
			url: "ukloni.php",
			type: "get",
			data: {
				id: $vrednost
			},
			success: function(data) {
				$("#prikaz").html(data);
			}
		});
	});
});