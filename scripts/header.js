var doc=document,
	wiw=window,
	i=1;
var a=i%2;
var userlogo=doc.getElementById("userLogo"),
	menu=doc.getElementById("menu"),
	profile=doc.getElementById("profile"),
	nav_a_two=doc.getElementById("nav_a_two"),
	nav_a_three=doc.getElementById("nav_a_three");

profile.setAttribute("href","profile/my.php");
nav_a_three.setAttribute("href","profile/my.php");

userlogo.addEventListener("click",function () {
	a=i%2;
	i++;

if (a==1){

		menu.style.marginTop="10%";
	

}
if (a==0){

		menu.style.marginTop="-10%";
		
}



/*nav_a_two.setAttribute("href","profile/my.php");*/


/*	if (a=0) {
		a=i%2;
		i++;
		console.log(i);
		menu.style.marginTop="10%";
		break;
	}
	if (a=1) {
		a=i%2;
		i++;
		console.log(i);
		menu.style.marginTop="-10%";
		break;	
	}*/



});