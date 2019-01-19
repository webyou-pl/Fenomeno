function wyValidate(){
    var email, eEmail, message, eMessage;

    email = document.forms["wyForm"]['email'].value;
    message = document.forms["wyForm"]['message'].value;
    // message = document.getElementById("message").value;
    
    if(email.length <= 9 || email == ""){
        console.log('jestem tu');
        eEmail = "Nieprawidłowy email";
        document.getElementById("eEmail").innerHTML = eEmail;
        return false;
    }
    document.getElementById("eEmail").innerHTML ="";

    if(message.length <= 10 || email == ""){
        console.log('jestem tu 2');
        eMessage = "Nieprawidłowy email";
        document.getElementById("eMessage").innerHTML = eMessage;
        return false;
    }
    ment.getElementById("eMessage").innerHTML = "";
}