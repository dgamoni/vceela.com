$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			autoScrollingMode: "onStart"
		});

		$("#artist_1").fadeIn("slow");
		$("#artist_2").fadeOut("slow");
		$("#artist_3").fadeOut("slow");
		$("#artist_4").fadeOut("slow");
		$("#artist_5").fadeOut("slow");
		$("#artist_6").fadeOut("slow");
		$("#artist_7").fadeOut("slow");
		$("#artist_8").fadeOut("slow");
		
	});

$(document).on('click', '#story_1' , function() {

    $("#artist_1").fadeIn("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_2' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeIn("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_3' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeIn("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_4' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeIn("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_5' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeIn("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_6' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeIn("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_7' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeIn("slow");
	$("#artist_8").fadeOut("slow");

});

$(document).on('click', '#story_8' , function() {

    $("#artist_1").fadeOut("slow");
	$("#artist_2").fadeOut("slow");
	$("#artist_3").fadeOut("slow");
	$("#artist_4").fadeOut("slow");
	$("#artist_5").fadeOut("slow");
	$("#artist_6").fadeOut("slow");
	$("#artist_7").fadeOut("slow");
	$("#artist_8").fadeIn("slow");

});
