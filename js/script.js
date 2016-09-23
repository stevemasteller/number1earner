/***********************************************************
*
************************************************************/
/*(function($) {*/


/*****************************************
* Display error messages
******************************************/

// remove all error messages
var clearDisplayErrors = function() {
	$('p.error').remove();
};

// brute force the display of each error message
var displayNameError = function() {
	var $newP = $('<p id="name-error" class="error">Name required</p>');
	
	$('#name').after($newP);
};

var displayEmailError = function() {
	var $newP = $('<p id="mail-error" class="error">Valid email required</p>');
	
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

/*****************************************
* Display Squeeze Page
******************************************/

var displaySqueezePage = function() {
		$('.floating-container').css('display', 'block');			
}

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
	// 		else temporarily don't submit the form
	//		but hide the squeeze page.
	if (isError) {
		$event.preventDefault();
	} else {
		$event.preventDefault();
		$('.floating-container').css('display', 'none');		
	}
});

// event handler for opt-out button on squeeze page
$('button.opt-out').click( function() {
	$('.floating-container').css('display', 'none');
	timeoutInit();
});

/*****************************************
* implement Squeeze Page
*****************************************/
const TIMEOUT_IN_SECONDS = 180; // three minutes
var timeout;					// holds timeout counter

// When timeout triggers
//		display squeez page
//		restart the timeout counter
var timeoutTrigger = function() {
    displaySqueezePage();
}

// Start the timeout counter
var timeoutInit = function() {
    timeout = setTimeout('timeoutTrigger()', TIMEOUT_IN_SECONDS * 1000);
 }

// Clear the timeout counter
//		timeout is a global variable
var timeoutClear = function() {
    clearTimeout(timeout);
}

/*****************************************
* Implement NavBar Accordian
*****************************************/

var $allPanels = $('.nav');
var $mainHeader = $('.main-header');

$('.site-logo').click( function () {
	
	if ($allPanels.css('display') === "none") {
		$mainHeader.css('background-color', '#000');
		$allPanels.slideDown(300);
	} else {
		$allPanels.slideUp(300, function() {
			$mainHeader.css('background-color', 'transparent');
		});
	}
});

/*****************************************
* on load
*****************************************/
timeoutInit();


/*})(jQuery);*/
