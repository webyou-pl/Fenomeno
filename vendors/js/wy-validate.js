function wyValidate(){
    var email, eEmail, message, eMessage;

    wyForm = document.forms["wyForm"];
    
    if(wyForm.email.value.length <= 9){
        eEmail = "Za krótki adres email";
        document.getElementById("eEmail").innerHTML = eEmail;
        return false;
    }
    var reg = /^[a-z\d]+[\w\d.-]*@(?:[a-z\d]+[a-z\d-]+\.){1,5}[a-z]{2,6}$/i;

    if (reg.test(wyForm.email.value) === false){
        eEmail = "Nieprawidłowy adres email";
        document.getElementById("eEmail").innerHTML = eEmail;
        return false;
    }
    document.getElementById("eEmail").innerHTML ="";


    if(wyForm.message.value.length <= 10 ){
        eMessage = "Zbyt krótka treść wiadomości";
        document.getElementById("eMessage").innerHTML = eMessage;
        return false;
    }
    ment.getElementById("eMessage").innerHTML = "";
}