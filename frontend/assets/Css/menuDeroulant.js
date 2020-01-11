var collectionItem = document.getElementsByClassName("dropdown-item");

var ObjArray = [];

for (var i = 1; i < collectionItem.length+1; i++) 
{
	collectionItem[i-1].setAttribute( "onClick", "javascript: test(" + i + ");" );
}

function test(id){
	var equipe133 = document.querySelector("#equipe" + id);
	if(checkifsomethingisVisible())
	{
		ClearAll();
		equipe133.style.visibility = "visible";
		equipe133.style.display = "block";
	} else {
		equipe133.style.visibility = "visible";
		equipe133.style.display = "block";
	}
}

function checkifsomethingisVisible()
{
	var signal = false;
	for (var i = 1; i < collectionItem.length+1; i++) 
{
	var equipe135 = document.querySelector("#equipe" + i);
	var styleCheck = equipe135.style.visibility;
	if(styleCheck == "visible")
	{
		signal = true;
	}
}
	return signal;
}

function ClearAll(){
	for (var i = 1; i < collectionItem.length+1; i++) 
{
	var equipe134 = document.querySelector("#equipe" + i);
		equipe134.style.visibility = "hidden";
		equipe134.style.display = "none";
}
}