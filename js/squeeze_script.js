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


/*****************************************
* implementSqueezePage
*****************************************/
var deleteAllLinks = function() {
	$('a').remove();
}

var hideSqueezePage = function() {
	$(document).find('.floating-container').hide();
}

var enableLinks = function() {
	var newLinks  = '<a href="index.html">Page 1</a>';
		newLinks += '<a href="page2.html">Page 2</a>';
		newLinks += '<a href="page3.html">Page 3</a>';
		newLinks += '<a href="page4.html">Page 4</a>';
	
	$(document).find('h2').after(newLinks);
}
			
var implementSqueezePage = function() {
	
	deleteAllLinks();
	incrementPageCount();
	
	if (sessionStorage.pageCount < 3) {
		
		hideSqueezePage();
		enableLinks();
	}
}

/*****************************************
* Session
*****************************************/
var incrementPageCount = function() {
    if(typeof(Storage) !== "undefined") {
	
			if (sessionStorage.pageCount) {
				
				sessionStorage.pageCount = Number(sessionStorage.pageCount) + 1;
			} else {
				
				sessionStorage.pageCount = 1;
			}
		
		} else {
    }
}

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
implementSqueezePage();
