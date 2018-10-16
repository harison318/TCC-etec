$(document).ready(function(){
		$("#olho").click(function(){
			var visivel = $("#senhainput").attr("type");
			if (visivel == "password") {
				$("#senhainput").attr("type", "text");
				$("#icon").addClass("fa-eye-slash");
				$("#icon").removeClass("fa-eye");
			}else{
				$("#senhainput").attr("type", "password");
				$("#icon").addClass("fa-eye");
				$("#icon").removeClass("fa-eye-slash");
			}
		});

});