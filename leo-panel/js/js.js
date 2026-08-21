function generate_invoice(){
	
	$('#error').html('');
	$('#error').hide();
	$('#success').html('');
	$('#success').hide();
	$('#loading').show();
	
	$('#submit').attr('disabled','disabled');
	
	var date = $('#date').val();
	
	if(date == ""){
		$('#error').html('No date selected');
		$('#loading').hide();
		$('#error').show();
		$('#submit').removeAttr('disabled');
	}
	else{
		$.post("process_invoice", {date:date}, function(str)
		{ 
			// console.log(str);
			$('#success').html(str);
			$('#loading').hide();
			$('#success').show();
			$('#submit').removeAttr('disabled');
		});
	}
}

function generate_single_invoice(){
	
	$('#s_error').html('');
	$('#s_error').hide();
	$('#s_success').html('');
	$('#s_success').hide();
	$('#s_loading').show();
	
	$('#s_submit').attr('disabled','disabled');
	
	var agent_id = $('#agent_id').find(":selected").val();
	var date = $('#s_date').val();
	
	if(date == ""){
		$('#s_error').html('No date selected');
		$('#s_loading').hide();
		$('#s_error').show();
		$('#s_submit').removeAttr('disabled');
	}
	else if(agent_id == ""){
		$('#s_error').html('No agent selected');
		$('#s_loading').hide();
		$('#s_error').show();
		$('#s_submit').removeAttr('disabled');
	}
	else{
		$.post("process_invoice", {agent_id:agent_id,date:date}, function(str)
		{ 
			// console.log(str);
			$('#s_success').html(str);
			$('#s_loading').hide();
			$('#s_success').show();
			$('#s_submit').removeAttr('disabled');
		});
	}
}