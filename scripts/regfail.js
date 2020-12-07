var doc=document,
	wiw=window;

var cont=doc.getElementById("cont"),
	form=doc.createElement("div"),
	input=doc.getElementById("input"),
	but=doc.getElementById("but");
form.id="regform";

function ab () {
form.innerHTML+="<h2> Форма регистрации </h2><h1>/</h1><form action='php/reg.php' method='post' id='reg_form'><input type='email' name='email' class='login' placeholder='Электронная почта*'><input type='text' name='login' class='login' placeholder='Логин*'><input type='text' name='name' class='login' placeholder='Имя*'><input type='password' name='pass' class='login' placeholder='Пароль*'><input type='submit' name='send' class='but' value='Регистрация'></form>";	
cont.appendChild(form);
}
but.addEventListener("click", function () {
	setTimeout(ab,200);

});

