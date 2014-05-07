function login(){
	if(document.getElementById("register").className="show") {
		document.getElementById("register").className="hidden";
	}

	document.getElementById("login").className="show";				
}

function register(){
	if(document.getElementById("login").className="show") {
		document.getElementById("login").className="hidden";
	}

	document.getElementById("register").className="show";
			
}