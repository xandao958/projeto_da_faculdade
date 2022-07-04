function validaCampos(){

    var campos = document.getElementsByTagName("input");

    for(var i = 0; i < 10; i++){
        if(campos[i].value == ""){
            alert("Preencha o campo " + campos[i].name + " !!!" );
            campos[i].focus();
            return;
        }
    }

    formulario.submit();
}