btn = document.querySelector('#btn');

btn.addEventListener("click", function (event) {
	btn.style.backgroundColor = "green";
	event.preventDefault();




	nome = document.querySelector('#nome');
	senha = document.querySelector('#senha');
	email = document.querySelector('#email');
	telefone = document.querySelector("#telefone");
	mostra = document.querySelector("#info");
	mostra.innerHTML="";
    
	
	if (nome.value == "") {
		info.innerHTML += "<h4>Preencha o campo nome.</h4>";
		nome.focus();
		mostra.style.display="block";

	}

	if (email.value == "") {
		info.innerHTML += "<h4>Preencha o campo email.</h4>";
		email.focus();
		info.style.display="block";
	}


	if (senha.value.length < 8) {
		info.innerHTML += "<h4>A senha deve ter no minino 8 caracteres.</h4>";
		senha.focus();
		info.style.display="block";
	}

	if (telefone.value == "") {
		info.innerHTML += "<h4>Preencha o campo telefone.</h4>";
		telefone.focus();
		info.style.display="block";
	}


	salm = {
		nome: nome.value,
		senha: senha.value,
		email: email.value,
		telefone: telefone.value

	};
});
