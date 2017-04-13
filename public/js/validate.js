var validateField = function(fieldElem, validateFn) {
	// fieldElem: CSS selector, jQuery element, or DOM element
	// that represents a text field
	// validateFn: function that validates the field's value

	//create nofitification if does not exist
	if ($(fieldElem).parent().children('span').length == 0){
		$(fieldElem).parent().append('<span></span>');
	}

	validateFn(fieldElem);
};

var validateNameFinal = function(fieldElem){
	var message = "";
	var type = "";

	if (fieldElem.value == ""){
		message = "Required";
		type = "error";
	}
	else if (!/^[a-zA-Z ]+$/.test(fieldElem.value)){
		message = "Invalid" ;
		type = "error";
	}
	else {
		message = "✓";
		type = "ok";
	}

	fieldElem.className = type;
	$(fieldElem).parent().children('span').html(message);
}

var validateAddressFinal = function(fieldElem){
	var message = "";
	var type = "";

	if (fieldElem.value == ""){
		message = "Required";
		type = "error";
	}
	else if (!/^[a-zA-Z0-9\s,'-]*$/.test(fieldElem.value)){
		message = "Invalid" ;
		type = "error";
	}
	else {
		message = "✓";
		type = "ok";
	}

	fieldElem.className = type;
	$(fieldElem).parent().children('span').html(message);
}

var validateZipFinal = function(fieldElem){
	var message = "";
	var type = "";

	if (fieldElem.value == ""){
		message = "Required";
		type = "error";
	}
	else if (!/^\d+$/.test(fieldElem.value)){
		message = "Invalid" ;
		type = "error";
	}
	else {
		message = "✓";
		type = "ok";
	}

	fieldElem.className = type;
	$(fieldElem).parent().children('span').html(message);
}

var validateAll = function(){

	//check each field and see if
	//it is valid
	var errors = 0;
	$('[type=text]').each(function(){

		if (this.className != "ok"){
			this.className = 'error';
			errors ++;
		}
	});

	if (errors == 0){
		alert("Form submitted!");
	}
}