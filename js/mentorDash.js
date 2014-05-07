function showProfile(){
	if(document.getElementById("messages").className="show") {
		document.getElementById("messages").className="hidden";
	}

	if(document.getElementById("settings").className="show") {
		document.getElementById("settings").className="hidden";
	}
	
	document.getElementById("profile").className="show";				
}

function showMessages(){
	if(document.getElementById("profile").className="show") {
		document.getElementById("profile").className="hidden";
	}

	if(document.getElementById("settings").className="show") {
		document.getElementById("settings").className="hidden";
	}
	
	document.getElementById("messages").className="show";				
}

function showSettings(){
	if(document.getElementById("messages").className="show") {
		document.getElementById("messages").className="hidden";
	}
	
	if(document.getElementById("profile").className="show") {
		document.getElementById("profile").className="hidden";
	}
	
	document.getElementById("settings").className="show";				
}

$('.dropdown-toggle').dropdown()

