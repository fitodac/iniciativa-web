$(document).ready(function(){
    
	(function($) {
		"use strict";

	
		jQuery.validator.addMethod('answercheck', function (value, element) {
			return this.optional(element) || /^\bcat\b$/.test(value)
		}, "type the correct answer -_-");

		// validate contactForm form
		$(function() {
			$('#contactForm').validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 20
					}
				},
				messages: {
						name: {
							required: "Queremos saber tu nombre...",
							minlength: "Tu nombre debe tener más de 2 caracteres"
						},
						email: {
							required: "Debes ingresar un email para enviar el mensaje",
							email: "El email debe ser válido"
						},
						message: {
							required: "Por favor, escribe un mensaje antes de hacer el envío",
							minlength: "El mensaje parece muy corto..."
						}
				},
				submitHandler: async function(form) {
					$('#contactForm').css({'pointerEvents': 'none'})

					$(form).ajaxSubmit({
						type: 'POST',
						data: $(form).serialize(),
						url: 'send.php',
						success: function() {
							$('#contactForm :input').attr('disabled', 'disabled');
							$('#contactForm').fadeTo( "slow", 1, function() {
								$(this).find(':input').attr('disabled', 'disabled');
								$(this).find('label').css('cursor','default');
								$('#success').fadeIn()
								$('.modal').modal('hide');
								$('#success').modal('show');
							})
						},
						error: function() {
							$('#contactForm').css({'pointerEvents': 'all'})

							$('#contactForm').fadeTo( "slow", 1, function() {
								$('#error').fadeIn()
								$('.modal').modal('hide');
								$('#error').modal('show');
							})
						}
					})

				}
			})
		})

	})(jQuery)
})