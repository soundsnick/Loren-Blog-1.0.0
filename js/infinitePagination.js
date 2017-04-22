$(document).ready(function(){
	var inProgress = false;
	var startFrom = 3;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        jQuery.ajax({
		      url: 'modules/articleLoad.php',
		      type:   "POST",
		      data: {"page": startFrom},
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