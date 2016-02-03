// JavaScript Document
jQuery(document).ready(function($)
{
	$('#calculator-form').submit(function(e)
	{
		e.preventDefault();
		//Serialize Form
		var calcData = $('#calculator-form').serialize();
		
		
		//submit form
		$.ajax({
			type:'post',
			url: $('#calculator-form').attr('action'),
			data: calcData
		}).done(function(response)
		{
			//if Success

			//Set Message Text
			$('#forme-msg').html(response);
			//clear fields
			
			$('#interst').val('');
				
		}).fail(function(data)
		{
			//iff error

			if(data.responseText !== '')
			{
				//Set Message Text
			$('#form-msg').text(data.responseText);
			}
			else 
			{
					$('#form-msg').text('Could Not Make Calculation');
			}
			
			
		});
		
	});
});