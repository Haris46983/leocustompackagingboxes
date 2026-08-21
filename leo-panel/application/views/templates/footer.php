<script>
	$(document).ready(function() {
        var $sigdiv = $("#signature").jSignature({'UndoButton':false});

        // -- i explain from here...
        $('#btnSave').click(function(){
            var sigData = $('#signature').jSignature('getData','image');
            // $('#hiddenSigData').val(sigData);
            // $('#signature_img').attr("src", 'data:' + sigData);
            $('#hiddenSigData').val('data:' + sigData);
			
			// var fsign = $('#hiddenSigData').val();
			
			// console.log(fsign);
			
			// var d = $(event.target).jSignature("getData", "native")
			var d = $('#signature').jSignature("getData", "native")
			
			if ( d.length > 0 || ( d.length === 1 && d[0].x.length > 20 ) ){
				$('#sign_suggestion').hide();
				$('#sign_failed').hide();
				$('#sign_success').show();
				
				$('#submitForm').removeAttr('disabled');
			}
			else{
				$('#sign_suggestion').hide();
				$('#sign_success').hide();
				$('#sign_failed').show();
				$('#submitForm').attr('disabled','disabled');
			}
        });
		
		$('#btnClear').click(function(){
			$('#submitForm').attr('disabled','disabled');
			$('#sign_suggestion').show();
			$('#sign_failed').hide();
			$('#sign_success').hide();
        });
        
    })
</script>
</body>
</html>