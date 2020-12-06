var doc=document,
	wiw=window;

var verifi=doc.getElementById("verifi"),
	deleted_but=doc.getElementById("deleted_but"),
	deleted_no=doc.getElementById("deleted_no");

deleted_but.addEventListener("click",function () {
	verifi.style.display="flex";
})	

deleted_no.addEventListener("click",function () {
	verifi.style.display="none";
})



