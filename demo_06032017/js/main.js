$(document).ready(function() {
      SetHeightGrid();
});

$(window).on('resize', function(){
      SetHeightGrid();
});

function SetHeightGrid() {
	$(".height-col-child").css("height", $(".height-col-main").height());
	$(".height-col-cself").css("height", $(".height-col-main").height()*2);
	$(".height-col-ctext").css("height", $(".height-col-ptext").height());
	$(".height-col-picdouc").css("height", $(".height-col-picdoup").height());
}
