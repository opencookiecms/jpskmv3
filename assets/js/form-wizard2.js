$(function() {
	'use strict'
	$('#wizard1').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		enableAllSteps: true,
		//enablePagination: false,
		stepsOrientation: "vertical",
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		onStepChanged: function (event, currentIndex, priorIndex){
		if (currentIndex === 11) { //if last step
			//remove default #finish button
			$('#wizard1').find('a[href="#finish"]').remove(); 
			//append a submit type button
			$('#wizard1 .actions li:last-child').append('<button type="submit" name="submit" id="click" class="btn btn-success">Save</button>');
			
		 }
	    }
		
	});
	$('#wizard12').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		enableAllSteps: true,
		//enablePagination: false,
		stepsOrientation: "vertical",
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
	
		
	});
	$('#wizard2').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		onStepChanging: function(event, currentIndex, newIndex) {
			if (currentIndex < newIndex) {
				// Step 1 form validation
				if (currentIndex === 0) {
					var fname = $('#firstname').parsley();
					var lname = $('#lastname').parsley();
					if (fname.isValid() && lname.isValid()) {
						return true;
					} else {
						fname.validate();
						lname.validate();
					}
				}
				// Step 2 form validation
				if (currentIndex === 1) {
					var email = $('#email').parsley();
					if (email.isValid()) {
						return true;
					} else {
						email.validate();
					}
				}
				// Always allow step back to the previous step even if the current step is not valid.
			} else {
				return true;
			}
		}
	});
	$('#wizard3').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		stepsOrientation: 1
	});
});