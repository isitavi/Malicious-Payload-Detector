(function ($) {

	/*Create mobile menu*/
	$("#nav-mobile").html($("#nav-main").html());
 	$("nav#nav-mobile ul").slideUp(250);
	
	/*Open mobile menu*/
 	$("#nav-trigger").click(function () {
     	 if ($("nav#nav-mobile ul").hasClass("expanded")) {
               $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
               $(this).removeClass("open");
    	   } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
				$('#nav-mobile').fadeUp("fast");
                $(this).addClass("open");
      	 }
  	 });
	 
	 /*Change language*/
	 $('ul.lang').slideUp(250);
	 $('a.btn-lang').click(function (e) {
		 e.preventDefault();
		  $(this).parent().find('ul').slideToggle("slow");
	 });
	 
	 $('ul.lang').find('a').click(function(e)  {
		 e.preventDefault();
		 $('a.btn-lang').text($(this).text());	 
		 $('ul.lang').slideUp( "slow");
	 });	 
	 
	 
})(jQuery);