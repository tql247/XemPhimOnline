var x = $("#info").height();
var y = $("#description").height();
if (x > y && $(window).width() > 994)
	document.getElementById("description").style.height = x + 8 + "px";
else if (x < y && $(window).width() > 994)
	document.getElementById("info").style.height = y + 8 + "px";
function myFunction() {
	var x = $("#info").height();
	var y = $("#description").height();
	
	if($(window).width() < 970 ){
		// alert("true");
		document.getElementById("info").style.height = "100%";
		document.getElementById("description").style.height = "100%";
	}
	
	else if (x > y)	{
		document.getElementById("description").style.height = x + 8 + "px";
	}
	else if (x < y)
		document.getElementById("info").style.height = y + 8 + "px";
	
	// if ($(window).width() < 995 && $(window).width() > 576)	{
		// $("#search").width("70%");
	// }else {
		// location.reload();
	// }
}