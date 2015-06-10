$(function(){
	$("#refreshimg").click(function(){
		$.post('captcha/newsession.php');
		$("#captchaimage").load('captcha/image_req.php?action='+$("#form1").attr("action"));
		return false;
	});
	
	$("#form1").validate({
		rules: {
			captcha: {
				required: true,
				remote: "captcha/process.php"
			}
		},
		messages: {
			captcha: "Captcha válido es requerido. Haga clic en el captcha para generar una nueva imagen."	
		},
		submitHandler: function(form) {
			form.submit ();
		},
		onkeyup: false
	});
	
});
