$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			autoScrollingMode: "onStart"
		});

		$("#story_1").show();
		$("#story_2").hide();
		$("#story_3").hide();
		$("#story_4").hide();
		$("#story_5").hide();
		$("#story_6").hide();
		$("#story_7").hide();
		$("#story_8").hide();
		
	});

$(document).on('click', '#story_1' , function() {

    $("#story_1").show();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_2' , function() {

    $("#story_1").hide();
	$("#story_2").show();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_3' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").show();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_4' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").show();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_5' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").show();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_6' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").show();
	$("#story_7").hide();
	$("#story_8").hide();

});

$(document).on('click', '#story_7' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").show();
	$("#story_8").hide();

});

$(document).on('click', '#story_8' , function() {

    $("#story_1").hide();
	$("#story_2").hide();
	$("#story_3").hide();
	$("#story_4").hide();
	$("#story_5").hide();
	$("#story_6").hide();
	$("#story_7").hide();
	$("#story_8").show();

});
