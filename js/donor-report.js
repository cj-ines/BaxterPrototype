$(document).ready(function(){
 	$('#maximize-one').click(function() {
 		maximize(1);
 	});

 	$('#minimize-one').click(function() {
 		minimize(1,7);
 	});

 	$('#maximize-two').click(function() {
 		maximize(2);
 	});

 	$('#minimize-two').click(function() {
 		minimize(2,5);
 	});

 	$('#maximize-three').click(function() {
 		maximize(3);
 	});

 	$('#minimize-three').click(function() {
 		minimize(3,12);
 	});
 	
});

function maximize(n)
{
	
 	hideAll();
 	$('#report-' + n).attr('class','col-md-12');
 	$('#report-' + n).show();
}

function minimize(n,w)
{
	showAll();
 	$('#report-' + n).attr('class','col-md-' + w);
}

function hideAll()
{
	$('#report-1').hide();
	$('#report-2').hide();
 	$('#report-3').hide();
}

function showAll()
{
	$('#report-1').show();
	$('#report-2').show();
 	$('#report-3').show();
}