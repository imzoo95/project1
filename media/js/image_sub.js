  $(document).ready(function() {
    var screenSize = $(window).width();
    var screenHeight = $(window).height();


        $("#content").css('margin-top',screenHeight);


		$('.down').click(function(){
			  screenHeight = $(window).height();
			  $('html,body').animate({'scrollTop':screenHeight}, 1500);
		});
		
		
  });