$(document).ready(function(){
	var inProgress = false;
	var startFrom = 3;
	var category = document.getElementById('category').innerHTML;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        jQuery.ajax({
		      url: 'modules/categoryLoad.php',
		      type:   "POST",
		      data: {"page": startFrom,
		  				"category": category},
		      success: function(response) {
	  			$('.grid').append(response);
	  			startFrom += 3;
		      },
		      error: function(response) {
		         $('.grid').append('<div class="error">Ошибка загрузки</div>');
		      }
		  	 });
	    }
    });
});