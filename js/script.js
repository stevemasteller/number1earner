/***********************************************************
*
*  Interactive Form
*
*  Adds user interactivity to a conference signup form in
*  an unobtrusive manner.
*
*  Author: Steve Masteller
*  Email: stevermasteller@gmail.com
*
*  Reserved Classes:
*		error
*
************************************************************/

// 
//	NOTE: all constants and global variables initialized in 
//		  the data.js file.
//

//
// Constants
//

//const MAIN_CONFERENCE 		= '0';	// Numeric constants identifying each activity.
//const FRAMEWORKS_WORKSHOP	    = '1';  // Must correspond to index in activitesArray and order
//const LIBRARIES_WORKSHOP	    = '2';	// displayed on form.
//const EXPRESS_WORKSHOP		= '3';
//const NODE_JS_WORKSHOP		= '4';
//const BUILD_TOOLS_WORKSHOP	= '5';
//const NPM_WORKSHOP 			= '6';

//
// Global variables
//

// global array of objects identifying activity conflicts and prices
// var activitiesArray = [];



/*****************************************
* Display error messages
******************************************/

// remove all error messages
var clearDisplayErrors = function() {
	$('p.error').remove();
};

// brute force the display of each error message
var displayNameError = function() {
	var $newP = $('<p class="error">Name required</p>');
	
	$('#name').after($newP);
};

var displayEmailError = function() {
	var $newP = $('<p class="error">Valid email required</p>');
	
	$('#mail').after($newP);	
};

/*****************************************
* Verify valid input fields
******************************************/

// check to see if a valid email address has been entered
var isEmailError = function() {
	
	var emailVal = $('#mail').val();	// get email value
	
	// Regex test from http://emailregex.com/
	var emailTest = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
	
	var isNotError = emailTest.test(emailVal); // perform the test
		
	if (isNotError) {
		return false;
	} else {
		displayEmailError(); // on error display message
		return true;	
	}
};

// check to see if a name has been entered
var isNameError = function() {
	var nameVal = $('#name').val();
	
	if (!nameVal.trim()) {	// don't count spaces
		displayNameError();	// on error display message
		return true;
	} else {
		return false;
	}
};

// Event handler for form submit input verification
$('form').on('click', 'button[type="submit"]', function($event) {
	
	var isError;
	
	clearDisplayErrors();
	
	// Or all the isXXXError(s) together to get a single true/false for an error occured  
	// wrote the isXxxError checks like this with checks on the left of the || operator
	//	to insure all error checks run
	isError = isNameError();
	isError = isEmailError() || isError;

	// if there is an error don't submit the form
	if (isError) {
		$event.preventDefault();
	} 
});

/*****************************************
* Info Section
******************************************/
	
/*****************************************
* On load
******************************************/
