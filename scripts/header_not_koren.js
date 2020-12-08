var doc=document,
	wiw=window,
	i=1;
var a=i%2;
var userlogo=doc.getElementById("userLogo"),
	exit=doc.getElementById("exit"),
	nav_a_two=doc.getElementById("nav_a_two"),
	nav_a_one=doc.getElementById("nav_a_one"),
	nav_a_three=doc.getElementById("nav_a_three");

nav_a_one.setAttribute("href","/");
nav_a_three.setAttribute("href","index.php");
nav_a_two.setAttribute("href","../story.php");

var admin_panel=doc.getElementById("admin_panel");
if (admin_panel!==null) {
admin_panel.setAttribute("href","../admin_panel.php");
}

userlogo.addEventListener("click",function () {
	a=i%2;
	i++;

if (a==1){

		exit.style.display="block";
	

}
if (a==0){

		exit.style.display="none";
		
}










});