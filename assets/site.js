// site.js - basic authentication functions for Social-igniter API
$(document).ready(function()
{

	// Login
	$('#user_login').bind('submit', function(e)
	{	
		e.preventDefault();
		$.validator(
		{
			elements :
				[{
					'selector' 	: '#login_email', 
					'rule'		: 'email', 
					'field'		: 'Please enter a valid Email',
					'action'	: 'label'	
				},{
					'selector' 	: '#login_password', 
					'rule'		: 'require', 
					'field'		: 'Please enter your Password',
					'action'	: 'label'
				}],
			message : '',
			success	: function()
			{
				var login_data = $('#user_login').serializeArray();
				login_data.push({'name':'session','value':'1'});		
			
				$.ajax(
				{
					url			: base_url + 'api/users/login',
					type		: 'POST',
					dataType	: 'json',
					data		: login_data,
			  		success		: function(result)
			  		{
						$('html, body').animate({scrollTop:0});
						if (result.status == 'success')
						{
							setTimeout(function() { window.location.href = base_url + 'home' });					
						}
						else
						{
							$('#content_message').notify({status:result.status,message:result.message});					
						}
				 	}
				});
			}
		});
	});
	

	// Signup
	$("#user_signup").bind('submit', function(e)
	{	
		e.preventDefault();	
		$.validator(
		{
			elements :		
				[{
					'selector' 	: '#signup_name', 
					'rule'		: 'require', 
					'field'		: 'Enter your name',
					'action'	: 'label'					
				},{
					'selector' 	: '#signup_email', 
					'rule'		: 'email', 
					'field'		: 'Please enter a valid email',
					'action'	: 'label'							
				},{
					'selector' 	: '#signup_password', 
					'rule'		: 'require', 
					'field'		: 'Please enter a password',
					'action'	: 'label'					
				},{
					'selector' 	: '#signup_password_confirm', 
					'rule'		: 'confirm', 
					'field'		: 'Please confirm your password',
					'action'	: 'label'					
				}],
			message : '',
			success	: function()
			{					
				var signup_data = $('#user_signup').serializeArray();
				signup_data.push({'name':'session','value':'1'});
				$.ajax(
				{
					url			: base_url + 'api/users/signup',
					type		: 'POST',
					dataType	: 'json',
					data		: signup_data,
			  		success		: function(result)
			  		{
						$('html, body').animate({scrollTop:0});
						if (result.status == 'success')
						{							
							$('[name=name]').val('');
							$('[name=email]').val('');
							$('[name=password]').val('');
							$('[name=password_confirm]').val('');						

							$('#content_message').notify({status:result.status,message:result.message,complete:'redirect',redirect: base_url + 'home'});								
						}
						else
						{
							$('#content_message').notify({status:result.status,message:result.message});					
						}
				 	}
				});
			}
		});
	});



	// Social Signup
	$("#user_social_signup").bind("submit", function(e)
	{
		e.preventDefault();

		var email			= isFieldValid('[name=signup_email]', 'your@email.com', 'Enter your email address');
		var email_valid		= validateEmailAddress($('[name=signup_email]').val());

		// Is Valid
		if (email == true && email_valid == true)
		{			
			var signup_data = $('#user_signup').serializeArray();

			$.ajax(
			{
				url			: base_url + 'api/users/set_userdata_signup_email',
				type		: 'POST',
				dataType	: 'json',
				data		: signup_data,
		  		success		: function(result)
		  		{
					$('html, body').animate({scrollTop:0});

					if (result.status == 'success')
					{
						$('#content_message').notify({status:result.status,message:result.message,complete:'redirect',redirect:'<?= $return_url ?>'});
					}
					else
					{
						$('#content_message').notify({status:result.status,message:result.message});					
					}
			 	}
			});
		}
		else if (email == true && email_valid == false)
		{
			$('#email_error').html('That email address is invalid').show('slow');
			$('#email_error').delay(2500).hide('slow');		
		}
		else
		{
			e.preventDefault();		
		}
	});	


	// Forgot Password
	$("#forgot_password").bind('submit', function(e)
	{
		e.preventDefault();	
		$.validator(
		{
			elements :		
				[{
				'selector' 	: '#forgot_email', 
				'rule'		: 'email', 
				'field'		: 'Please enter a valid email',
				'action'	: 'label'	
				}],
			message : '',
			success	: function()
			{					

				$.ajax(
				{
					url			: base_url + 'api/users/password_forgot',
					type		: 'POST',
					dataType	: 'json',
					data		: $('#forgot_password').serializeArray(),
			  		success		: function(result)
			  		{					
						if (result.status == 'success')
						{
							$('#content_message').notify({status:result.status,message:result.message,complete:'redirect',redirect: base_url + 'login'});					
						}
						else
						{
							$('#content_message').notify({status:result.status,message:result.message});					
						}
				 	}
				});
			}
		});
	});


	// Scrolling Image Panorama
	var images = document.querySelectorAll('img.scrolling-panorama');
	
	for (var i = 0; i < images.length; i++) {
		images[i].addEventListener('load', function (event) {
			var img = event.target;
			var div = document.createElement('div');
			
			div.classList.add('scrolling-panorama');
			div.style.height = img.naturalHeight + 'px';
			div.style.backgroundImage = 'url(' + img.src + ')';
			
			img.parentElement.appendChild(div);
			img.parentElement.removeChild(img);
		});
	}

});