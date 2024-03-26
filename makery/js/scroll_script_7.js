$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			autoScrollingMode: "onStart"
		});

	});

$(document).on('click', '#story_1' , function() {
     alert('register');
});