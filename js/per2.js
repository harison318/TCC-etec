$(document).ready(function(){
		$("#olho").click(function(){
			var visivel = $("#senha").attr("type");
			if (visivel == "password") {
				$("#senha").attr("type", "text");
				$("#icon").addClass("fa-eye-slash");
				$("#icon").removeClass("fa-eye");
			}else{
				$("#senha").attr("type", "password");
				$("#icon").addClass("fa-eye");
				$("#icon").removeClass("fa-eye-slash");
			}
		});

});

$(document).ready(function(){
		$("#olho2").click(function(){
			var visivel = $("#csenha").attr("type");
			if (visivel == "password") {
				$("#csenha").attr("type", "text");
				$("#icon").addClass("fa-eye-slash");
				$("#icon").removeClass("fa-eye");
			}else{
				$("#csenha").attr("type", "password");
				$("#icon").addClass("fa-eye");
				$("#icon").removeClass("fa-eye-slash");
			}
		});

});