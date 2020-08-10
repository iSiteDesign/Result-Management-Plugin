/*
	Author: S.k.joy
	Author URI: http://skjoy.info
*/

jQuery(document).ready(function($){
	$('#result-form').submit(function(e){
		//Execute when submit
		e.preventDefault();
		
		//Add necessary veriable
		
		var exam_reg = $('#exam-reg').val();
		
		//Add Jquery ajax method
		
		$.ajax({
			type: 'POST',
			url:  jsrms_object.ajaxUrl,
			data: {
				action: 'jsrms_student_result_view',
				examroll: exam_reg
			},
			success: function(data){
				$('.jsrms-result').html(data);
			},
			error: function(XMLHttpRequest, textStatus, errorTrown){
				alert(errorTrown);
			},
			beforeSend: function(){
				$('.loader').show()
			},
			complete: function(){
				$('.loader').hide();
			}
		});
	});
});