document.getElementById("topsesson").style.backgroundColor="#6C757D";
document.getElementById("content-topsesson").style.display="block";
function topsessonC() {
	document.getElementById("topsesson").style.backgroundColor="#6C757D";
	document.getElementById("content-topsesson").style.display="block";
	
	document.getElementById("topyear").style.backgroundColor="transparent";
	document.getElementById("content-topyear").style.display="none";
	document.getElementById("topview").style.backgroundColor="transparent";
	document.getElementById("content-topview").style.display="none";
}

function topyearC() {
	document.getElementById("topyear").style.backgroundColor="#6C757D";
	document.getElementById("content-topyear").style.display="block";
	
	document.getElementById("topsesson").style.backgroundColor="transparent";
	document.getElementById("content-topsesson").style.display="none";
	document.getElementById("topview").style.backgroundColor="transparent";
	document.getElementById("content-topview").style.display="none";
}

function topviewC() {
	document.getElementById("topview").style.backgroundColor="#6C757D";
	document.getElementById("content-topview").style.display="block";
	
	document.getElementById("topsesson").style.backgroundColor="transparent";
	document.getElementById("content-topsesson").style.display="none";
	document.getElementById("topyear").style.backgroundColor="transparent";
	document.getElementById("content-topyear").style.display="none";
}

//orther
// document.getElementsByTagName("div");