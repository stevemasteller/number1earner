/***********************************************************
*
************************************************************/
(function($) {


/*****************************************
* implementSqueezePage
*****************************************/


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
})(jQuery);
