$(document).ready(function () {
		$("#makeMeScrollable").smoothDivScroll({
			mousewheelScrolling: "allDirections",
			manualContinuousScrolling: true,
			autoScrollingMode: "onStart"
		});

		$('#story_1').on("click", "img", function () {
			alert('You Clicked on story_1');
		});
	});

$('#story_1').click(function(){
     alert('You single clicked on story_1');
});