/*
	***Asteriscos
*/

(function($) {
	var setCurrentPage = function() {
		var navbar = $('#content #nav #links > li');
        var url = window.location.href;

        console.log(url);

	};

    $( document ).ready(function() {
    	setCurrentPage();
    });
})(jQuery);