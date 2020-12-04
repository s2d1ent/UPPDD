var doc=document,
	wiw=window,
	i=1;
var a=i%2;
var userlogo=doc.getElementById("userLogo"),
	menu=doc.getElementById("menu");
	console.log(i);
userlogo.addEventListener("click",function () {
	a=i%2;
	i++;
	console.log(i);	
if (a==1){

		menu.style.marginTop="10%";
	

}
if (a==0){

		menu.style.marginTop="-10%";
		
}
console.log(a==1,a==0);





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