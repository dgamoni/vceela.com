$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
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
		
	});

$(document).on('click', '#story_1' , function() {

    $("#artist_1").show();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_2' , function() {

    $("#artist_1").hide();
	$("#artist_2").show();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_3' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").show();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_4' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").show();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_5' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").show();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_6' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").show();
	$("#artist_7").hide();
	$("#artist_8").hide();

});

$(document).on('click', '#story_7' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").show();
	$("#artist_8").hide();

});

$(document).on('click', '#story_8' , function() {

    $("#artist_1").hide();
	$("#artist_2").hide();
	$("#artist_3").hide();
	$("#artist_4").hide();
	$("#artist_5").hide();
	$("#artist_6").hide();
	$("#artist_7").hide();
	$("#artist_8").show();

});
