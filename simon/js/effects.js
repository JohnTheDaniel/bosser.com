/*Header Animation, fade in*/
$(document).ready(function() {
	$('#header').delay(800).animate({
		"opacity":"1"
	}, 2000)
});
$(document).ready(function() {
	$('body').delay(300).animate({
		"opacity":"1"
	}, 1000)
});

/*navigation animation*/

$(".nav").hover(function() {
	$(this).stop().animate({
		color: '#6699FF'
}, 300);
},
function() {
	$(this).stop().animate({
		color: '#FFF'
}, 300);	
});