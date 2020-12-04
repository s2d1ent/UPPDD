var doc=document,
	wiw=window;

doc.getElementById("logo").addEventListener("click",function () {
	var twitch=doc.getElementById("twitch"),
		vk=doc.getElementById("vk"),
		github=doc.getElementById("github"),
		lazycote=doc.getElementById("lazycote");
});
doc.getElementById("logo").addEventListener("mouseover",function () {
	this.style.boxShadow="0px 5px 15px 1px rgba(0, 0, 0, 0.5)";
});
doc.getElementById("logo").addEventListener("mouseout",function () {
	this.style.boxShadow="0px 5px 15px 1px rgba(0, 0, 0, 0)";
});

