
console.log("HELP!");
function validate() {
	var x = document.forms["textsearch"]["search"].value;
	if (x == "") {
		alert("Name must be filled out");
		return false;
	}
}
