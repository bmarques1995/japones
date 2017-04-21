function removeLog(){
    document.querySelector("#log-ins").innerHTML = "";
}

function verificaInsercao(){
    var val = document.querySelector("#simbolo").value, a = val.charCodeAt(0);
    if(a<19968||a>40959||val==""){
        return;
    }
    var func = function(){
        var b;
        if(this.readyState == 4 && this.status == 200){
            b = parseInt(this.responseText);
            switch(b){
                case 0:
                    document.querySelector("#log-ins").innerHTML = 'Símbolo não encontrado';
                    document.querySelector("#log-ins").setAttribute('value','1');
                    break;
                case 1:
                    document.querySelector("#log-ins").innerHTML = 'Símbolo encontrado com êxito';
                    document.querySelector("#log-ins").setAttribute('value','0');
                    break;
            }
            
        }
    }
    ajax("http://localhost/transfer/kanji/backend/consulta.php",0,func,"val=1&sim="+val);
}

function envio(){
    var val = document.querySelector("#simbolo").value, a = val.charCodeAt(0);
    document.querySelector("#simbolo").value = null;
    if(a<19968||a>40959||val==""){
        document.querySelector("#log-ins").innerHTML = "Símbolo inválido";
        setTimeout(removeLog,3000);
        return;
    }
    else{
        var c = parseInt(document.querySelector("#log-ins").getAttribute('value'));
        console.log(c);
        var func = function(){
            var b;
            if(this.readyState == 4 && this.status == 200){
                b = parseInt(this.responseText);
                switch(b){
                    case 0:
                        document.querySelector("#log-ins").innerHTML = 'Falha na inserção';
                        break;
                    case 1:
                        document.querySelector("#log-ins").innerHTML = 'Símbolo inserido com êxito';
                        break;
                }
                document.querySelector("#log-ins").setAttribute('value','0');
                setTimeout(removeLog,3000);
            }
        }
        if(1==c){
            ajax("http://localhost/transfer/kanji/backend/insercao.php",1,func,"val=1&sim="+val);
        }
    }
}