$(document).ready(function() {
      SetHeightGrid();
});

$(window).on('resize', function(){
      SetHeightGrid();
});

function SetHeightGrid() {
	$(".height-col-child").css("height", $(".height-col-main").height());
}
