$(function(){
    $( function() {
        $( "#datepicker" ).datepicker();
    });

    $( '#slider1' ).slider({
    range: 'min',
    min: 1000,
	max: 3000000,
    value: 1500000,
    slide : function(event, ui){
        $('#first_input').val(ui.value);
    }});
    
    $( '#slider2' ).slider({
    range: 'min',    
    min: 1000,
	max: 3000000,
    value: 1500000,
    slide : function(event, ui){
        $('#second_input').val(ui.value);
    }});

    $('#first_input').change(function(){
		$('#slider1').slider({'value': $('#first_input').val()});
	});
    $('#second_input').change(function(){
		$('#slider2').slider({'value': $('#second_input').val()});
	});

    $('#radio1').click(function(){
            $('#second_input').val("");
            $('#second_input').attr('readonly', true);
            $('.slider2class').css("visibility", "hidden")
    });
    $('#radio2').click(function(){
        $('#second_input').attr('readonly', false);
        $('.slider2class').css("visibility", "visible")
});
});

function validateForm() {
    
    const dateInput = $('#datepicker').val();
    const firstInput = $('#first_input').val();
    const secondInput = $('#second_input').val();
    var regex = /^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/\d{4}$/;

    if (!regex.test(dateInput)) {
        $('.error1').css("border", "1px solid red");
        return false;
    }
    else{
        $('.error1').css("border", "1px solid gray");
    }  

    console.log()
    if (!firstInput || firstInput < 1000 || firstInput > 3000000 || firstInput.length > 7) {
        $('.error2').css("border", "1px solid red");
        return false;
    }
    else{
        $('.error2').css("border", "1px solid gray");
    }

    if ($('#radio2').is(':checked')) {
        if (!secondInput || secondInput < 1000 || secondInput > 3000000 || secondInput.length > 7) {
            $('.error3').css("border", "1px solid red");
            return false;
        }
        else{
            $('.error3').css("border", "1px solid gray");
        }    
    }
    return true;
}


$( document ).ready(function() {
    $('#submit').click(function(){
        if (!validateForm()) {
            return false;
        }
        sendAjaxForm('result_form', 'ajax_form', 'calc.php');
        return false; 
    });
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     'POST',
        dataType: 'html',
        data: jQuery('#'+ajax_form).serialize(),
        success: function(response) {
        	result = jQuery.parseJSON(response);
        	document.getElementById(result_form).value = result.res;
    	},
    	error: function(response) {
    		console.log('Ошибка.Данные не отправлены');
    	}
 	});
}