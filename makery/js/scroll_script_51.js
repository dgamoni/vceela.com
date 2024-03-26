$j=jQuery.noConflict();

$j(document).ready(function () {
//$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			//autoScrollingMode: "onStart"
		});

		$("#mainPageInstagramScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			autoScrollingMode: "onStart"
		});


		$("#artist_1").show();
		$("#artist_2").hide();
		$("#artist_3").hide();
		$("#artist_4").hide();
		$("#artist_5").hide();
		$("#artist_6").hide();
		$("#artist_7").hide();
		$("#artist_8").hide();

		$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
		$('#cssmenu #menu-button').on('click', function(){
			var menu = $(this).next('ul');
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			} else {
				menu.addClass('open');
			}
		});

		/*$('img[usemap]').rwdImageMaps();*/
		$('#myCarousel').on('slide.bs.carousel', function () {
				 $('img[usemap]').rwdImageMaps();
			});
			
		$("#vertical-menu h3").click(function () {
			alert( "Thanks for visiting!" );
			//slide up all the link lists
			$("#vertical-menu ul ul").slideUp();
			$('.plus',this).html('+');
			//slide down the link list below the h3 clicked - only if its closed
			if (!$(this).next().is(":visible")) {
				$(this).next().slideDown();
				//$(this).remove("span").append('<span class="minus">-</span>');
				$('.plus').html('+');
				$('.plus',this).html('-');
			}
		});

	});

$(document).on("click", "#story_1" , function() {

    $("#artist_1").show();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_2" , function() {

    $("#artist_1").hide();
	$("#artist_2").show();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_3" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").show();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_4" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").show();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_5" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").show();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_6" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").show();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on("click", "#story_7" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").show();
	$("#artist_8").hide();

});

$(document).on("click", "#story_8" , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").show();

});




$("#vertical-menu-2 h3").click(function () {
    //slide up all the link lists
    $("#vertical-menu ul ul").slideUp();
    $('.plus',this).html('+');
    //slide down the link list below the h3 clicked - only if its closed
    if (!$(this).next().is(":visible")) {
        $(this).next().slideDown();
        //$(this).remove("span").append('<span class="minus">-</span>');
        $('.plus').html('+');
        $('.plus',this).html('-');
    }
})
