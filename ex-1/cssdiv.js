var div1;

window.onload = function(){
    div1 = document.getElementById("div1")

    var bt1 = document.getElementById("bt1")
    bt1.onclick = mostrardiv1;

    div1.classList.add("ocutar");
}

function mostrardiv1(){
    div1.classList.remove("ocutar");
}