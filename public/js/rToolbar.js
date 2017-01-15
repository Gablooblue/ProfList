function navbar()
{
	var x = document.getElementById("myToolbar")
	if (x.className === "toolbar")
	{
		x.className += " responsive";
	}
	else
	{
		x.className = "toolbar";
	}
}
