$(document).ready(function() {
	CheckEmptyPanel();
	CheckChildGroup();	
});

function CheckEmptyPanel(){
	$('.panel-group').click(function(){
		$valueID = $(this).index() + 1;	
		$collapseParent = $('#collapse' + $valueID + '> .list-group.list-group-parent');
		$collapseChild = '#collapse' + $valueID + '.panel-collapse.collapse';

		if (!$collapseParent.length){  
			$($collapseChild).empty();
			$($collapseChild).append('<p>No Empty</p>');
			$($collapseChild + '> p').css('margin-left','15px');
		}
	});

	$('.panel-group .panel-group-list').click(function(){
		$valueID = $(this).index() + 1;	
		$collapseParent = $('#collapse' + $valueID + '> .list-group.list-group-parent');
		$collapseChild = '#collapse' + $valueID + '.panel-collapse.collapse';

		if (!$collapseParent.length){  
			$($collapseChild).empty();
			$($collapseChild).append('<p>No Empty</p>');
			$($collapseChild + '> p').css('margin-left','15px');
		}
	});
}

function CheckChildGroup(){
	CheckChild('parentmain', 'childmain');
	CheckChild('parentlevel', 'childlevel');
	CheckChild('parentarea', 'childarea');
}

function CheckChild($parentName, $childName){
	$('.list--group-' + $childName).click(function(){
		$('p.list-group-' + $parentName).html($(this).text());
		$('.panel-collapse.collapse.switch-' + $childName).removeClass('in');
		$('p.list-group-' + $parentName).append('<span class="panel--title-child"><img src="img/down-arrow.png" class="bullet"></span>');
	});
}
