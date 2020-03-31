var btn1 = document.querySelector("#btn1");
var equipe1 = document.querySelector("#equipe1");
var btn2 = document.querySelector("#btn2");
var equipe2 = document.querySelector("#equipe2");
var btn3 = document.querySelector("#btn3");
var equipe3 = document.querySelector("#equipe3");
var btn4 = document.querySelector("#btn4");
var equipe4 = document.querySelector("#equipe4");

var boolEquipe1 = false;
var boolEquipe2 = false;
var boolEquipe3 = false;
var boolEquipe4 = false;

btn1.onclick = function () {
	if(boolEquipe1 || boolEquipe2 || boolEquipe3 || boolEquipe4){
		CleanTout();
	}
	if(!boolEquipe1){
		boolEquipe1 = true;
		equipe1.style.visibility = "visible";
		equipe1.style.display = "block";
	} else {
		boolEquipe1 = false;
		equipe1.style.visibility = "hidden";
		equipe1.style.display = "none";
	}
}

btn2.onclick = function () {
	if(boolEquipe1 || boolEquipe2 || boolEquipe3 || boolEquipe4){
		CleanTout();
	} 
	if(!boolEquipe2){
		boolEquipe2 = true;
		equipe2.style.visibility = "visible";
		equipe2.style.display = "block";
	} else {
		boolEquipe2 = false;
		equipe2.style.visibility = "hidden";
		equipe2.style.display = "none";
	}
}

btn3.onclick = function () {
	if(boolEquipe1 || boolEquipe2 || boolEquipe3 || boolEquipe4){
		CleanTout();
	} 
	if(!boolEquipe3){
		boolEquipe3 = true;
		equipe3.style.visibility = "visible";
		equipe3.style.display = "block";
	} else {
		boolEquipe3 = false;
		equipe3.style.visibility = "hidden";
		equipe3.style.display = "none";
	}
}

btn4.onclick = function () {
	if(boolEquipe1 || boolEquipe2 || boolEquipe3 || boolEquipe4){
		CleanTout();
	} 
	if(!boolEquipe4){
		boolEquipe4 = true;
		equipe4.style.visibility = "visible";
		equipe4.style.display = "block";
	} else {
		boolEquipe4 = false;
		equipe4.style.visibility = "hidden";
		equipe4.style.display = "none";
	}
}

function CleanTout() {
	equipe1.style.visibility = "hidden";
	equipe1.style.display = "none";
	equipe2.style.visibility = "hidden";
	equipe2.style.display = "none";
	equipe3.style.visibility = "hidden";
	equipe3.style.display = "none";
	equipe4.style.visibility = "hidden";
	equipe4.style.display = "none";
	boolEquipe1 = false;
    boolEquipe2 = false;
    boolEquipe3 = false;
    boolEquipe4 = false;
}