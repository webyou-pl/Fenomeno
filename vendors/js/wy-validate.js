function wyValidate(){
    var eEmail, eMessage, f = true;
    var reg = /^[a-z\d]+[\w\d.-]*@(?:[a-z\d]+[a-z\d-]+\.){1,5}[a-z]{2,6}$/i;

    wyForm = document.forms["wyForm"];
    
    if(wyForm.email.value.length == ""){
        eEmail = "Wprowadź email";
        document.getElementById("eEmail").innerHTML = eEmail;
        f = false;
    }
    else if(wyForm.email.value.length <= 9){
        eEmail = "Za krótki adres email";
        document.getElementById("eEmail").innerHTML = eEmail;
        f = false;
    } 
    else if(reg.test(wyForm.email.value) === false){
        eEmail = "Nieprawidłowy adres email";
        document.getElementById("eEmail").innerHTML = eEmail;
        f = false;
    }else{
        document.getElementById("eEmail").innerHTML ="";
    }

    if(wyForm.message.value.length == ""){
        eMessage = "Wprowadź treść wiadomości";
        document.getElementById("eMessage").innerHTML = eMessage;
        f = false;
    }
    else if(wyForm.message.value.length <= 10 ){
        eMessage = "Zbyt krótka treść wiadomości";
        document.getElementById("eMessage").innerHTML = eMessage;
        f = false;
    }else{
        document.getElementById("eMessage").innerHTML = "";
    }
    
    if(f === true){
        return true;
    }else{
        return false;
    }
}

// pokaz karty
function addShow(card){
    var card = document.getElementById('news-card');
    if(card.classList.length == 1){
        console.log(card.classList);
        card.classList.add("showCard");
    }
    else{
        card.classList.remove("showCard");
    }
}

