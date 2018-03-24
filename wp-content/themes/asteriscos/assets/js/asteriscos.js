/*
	***Asteriscos
*/

(function($) {
	var setCurrentPage = function() {
		var navbar = $('#content #nav .links > li.tab');
		var currentTab = navbar.find('a[href$="' +  window.location.pathname +'"]');

		currentTab.parent().addClass('active');

	};

    $( document ).ready(function() {
    	setCurrentPage();
    });
})(jQuery);