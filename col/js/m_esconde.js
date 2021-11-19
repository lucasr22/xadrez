cadastro=document.querySelector("#cadastro");
sc=document.querySelector("#cad1");
cadastro.addEventListener("click",function(event){


if (sc.style.display == "none"){
	sc.style.display="block";
}
else{
	sc.style.display="none";
}

})

    
	recolher=document.querySelector("#recolher");
	recol=document.querySelector("#recol");
	recol.addEventListener("click", function(event){
		if(recolher.style.width=="20%"){
			recolher.style.width="10%";
		}else{
			recolher.style.width="20%";
		}
	})


