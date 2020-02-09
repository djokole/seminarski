$(document).ready(function() {
	$("#odabrana_igrica").change(function() {
		var $vrednost = $("#odabrana_igrica").val();
		$.ajax({
			url: "ajmoigrice.php",
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