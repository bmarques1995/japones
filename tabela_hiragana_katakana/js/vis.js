function escondeMostra(id){
    var a = document.querySelector("#"+id);
    document.querySelector(".vis").classList.remove("vis");
    a.classList.add("vis");
}
function submenu(id){
    var val = document.querySelectorAll('.menu-subitem');
    for(var i=0;i<val.length;++i)
        if(val[i].classList.contains("inv"))
            continue;
        else
            val[i].classList.add("inv");
    val = document.querySelector("#menu-"+id);
    val.classList.remove("inv");
}
function esconde(){
    var val = document.querySelectorAll('.menu-subitem');
    for(var i=0;i<val.length;++i)
        if(val[i].classList.contains("inv"))
            continue;
        else
            val[i].classList.add("inv");
}