
var formValid = document.getElementById('sendbutton');
    var Surname = document.getElementById('surname');
    var FalseSurname = document.getElementById('falsesurname');
    var Name = document.getElementById('name');
    var FalseName = document.getElementById('falsename');
    var myRegexName = /^[a-zA-Z-\s]{2,30}$/;
    
    var Email = document.getElementById('email');
    var FalseEmail = document.getElementById('falsemail');
    var myRegexEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;


    var Sujet = document.getElementById('sujetmsg');
    var FalseSujet = document.getElementById('falsesujetmsg');
    var myRegexSujet = /^[a-zA-Z-\s]{5,30}$/;
/*
    var Date1 = document.getElementById('date');
    var DateMax1 = Date1('01/02/1910');
    var FalseDate = document.getElementById('falsedate2');
    var myRegexDate2 =  /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    */
    var Message = document.getElementById('message');
    var FalseMessage = document.getElementById('falsemessage');
    var myRegexMessage = /^[a-zA-Z-\s.'?!,@$#\-_]{5,250}$/; // Verification du nombre de caracteres dans le message
    formValid.addEventListener('click', validation);
            
            function validation(e){
                //Si le champ est vide
                if (Surname.validity.valueMissing){
                    e.preventDefault();
                    FalseSurname.textContent = 'Veuillez insérer votre nom.';
                    FalseSurname.style.color = 'red';
                    FalseSurname.style.backgroundColor = 'red';
                    FalseSurname.style.background="red";


                }else if (myRegexName.test(Surname.value) == false){
                    e.preventDefault();
                    FalseSurname.textContent = 'Veuillez utiliser des lettres, espaces et tirets.';
                    FalseSurname.style.color = 'red';
                    FalseSurname.style.backgroundColor = 'red';
                    FalseSurname.style.focus();
                    FalseSurname.style.background="red";
                }

                if (Name.validity.valueMissing){
                    e.preventDefault();
                    FalseName.textContent = 'Veuillez insérer votre prénom.';
                    FalseName.style.color = 'red';
                }else if (myRegexName.test(Name.value) == false){
                    e.preventDefault();
                    FalseName.textContent = 'Veuillez utiliser des lettres, espaces et tirets.';
                    FalseName.style.color = 'red';
                }

                if (Email.validity.valueMissing){
                    e.preventDefault();
                    FalseEmail.textContent = 'Veuillez insérer votre adresse mail';
                    FalseEmail.style.color = 'red';
                }else if (myRegexEmail.test(Email.value) == false){
                    e.preventDefault();
                    FalseEmail.textContent = 'Veuillez rentrer une adresse mail existante de la forme aaaaaaa@bbbb.ccc. Il est possible d utiliser des caracteres speciaux et chiffres.';
                    FalseEmail.style.color = 'red';
                }

                /*if (Date1.validity.valueMissing){
                    e.preventDefault();
                    FalseDate.textContent = 'Veuillez insérer votre date.';
                    FalseDate.style.color = 'red';
                }else if (myRegexDate.test(Date.value) == false){
                    e.preventDefault();
                    FalseDate.textContent = 'Veuillez rentrer une date existante, entre le 01/02/1920 et le 01/02/2005 .';
                    FalseDate.style.color = 'red';
                }*/

                if (Sujet.validity.valueMissing){
                    e.preventDefault();
                    FalseSujet.textContent = 'Veuillez insérer un sujet a votre message.';
                    FalseSujet.style.color = 'red';
                }else if (myRegexSujet.test(Sujet.value) == false){
                    e.preventDefault();
                    FalseSujet.textContent = 'Votre sujet n est pas valide. Veuillez utiliser des lettres.';
                    FalseSujet.style.color = 'red';
                }

            if (Message.validity.valueMissing){
                e.preventDefault();
                FalseMessage.textContent = 'Veuillez insérer votre message ici.';
                FalseMessage.style.color = 'red';
            }else if (myRegexMessage.test(Message.value) == false){
                e.preventDefault();
                FalseMessage.textContent = 'Veuillez rentrer entre 5 et 250 caracteres valides (lettres, chiffres, les caracteres speciaux suivants: .?!,@$#-_).';
                FalseMessage.style.color = 'red';
        }
    }
/*
let Contact = document.getElementById('Contact');

Contact.addEventListener('submit', function(e) {
    let myInput = document.getElementById('surname');
    let myRegex = /^[a-zA-Z-\s]{2,30}$/;
    let myInput2 = document.getElementById('name');
    let myInput3 = document.getElementById('email');
    let myRegex2 = /^[a-zA-Z0-9.-_]+[@][a-zA-Z0-9.-_]+[.]{1}[a-z]{2,5}$/;
    //let myInput = document.getElementById('date');
    let myInput4 = document.getElementById('sujetmsg');
    let myRegex3 = /^[a-zA-Z-\s]{2,20}$/; //Verification du nombre de caracteres du sujet de message

    let myInput5 = document.getElementById('message');
    let myRegex4 = /^[a-zA-Z0-9.-_\s]{5,150}$/; // Verification du nombre de caracteres dans le message
  //  let myRegex3 = ${myInput5.length}; //verification des elements du nombre de caracteres insérés
    //let myInput = document.getElementById('metier');
    //let myInput = document.getElementById('country');
    //let myInput = document.getElementById('message');


    if (myInput.value.trim() == "") {
        let myError = document.getElementById('error');
        myError.innerHTML = "Votre nom est requis.";
        myError.style.color = 'red';
        e.preventDefault();
    } else if (myRegex.test(myInput.value) == false) {
        let myError = document.getElementById('error');
        myError.innerHTML = "N'inclure que des lettres, espaces et tirets";
        myError.style.color = 'red';
        e.preventDefault();
    } 

    if (myInput2.value.trim() == "") {
        let myError1 = document.getElementById('error1');
        myError1.innerHTML = "Votre prénom est requis.";
        myError1.style.color = 'red';
        e.preventDefault();
    } else if (myRegex.test(myInput2.value) == false) {
        let myError1 = document.getElementById('error1');
        myError1.innerHTML = "N'inclure que des lettres, espaces et tirets";
        myError1.style.color = 'red';
        e.preventDefault();
}
if (myInput3.value.trim() == "") {
    let myError2 = document.getElementById('error2');
    myError2.innerHTML = "Votre adresse mail est requise.";
    myError2.style.color = 'red';
    e.preventDefault();
} else if (myRegex2.test(myInput3.value) == false) {
    let myError2 = document.getElementById('error2');
    myError2.innerHTML = "Inserez une adresse mail valide.";
    myError2.style.color = 'red';
    e.preventDefault();
}


if (myInput4.value.trim() == "") {
    let myError3 = document.getElementById('error4');
    myError3.innerHTML = "Le sujet de votre message est requis.";
    myError3.style.color = 'red';
    e.preventDefault();
} else if (myRegex3.test(myInput4.value) == false) {
    let myError3 = document.getElementById('error4');
    myError3.innerHTML = "Veuillez rediger votre message.";
    myError3.style.color = 'red';
    e.preventDefault();
}

})


/*


if (myInput3.value.trim() == "") {
    let myError2 = document.getElementById('error2');
    myError2.innerHTML = "Votre adresse mail est requise.";
    myError2.style.color = 'red';
    e.preventDefault();
} else if (myRegex2.test(myInput3.value) == false) {
    let myError2 = document.getElementById('error2');
    myError2.innerHTML = "Inserez une adresse mail valide.";
    myError2.style.color = 'red';
    e.preventDefault();
}
if (myInput4.value.trim() == "") {
    let myError3 = document.getElementById('error3');
    myError3.innerHTML = "Votre date de naissance est requise.";
    myError3.style.color = 'red';
    e.preventDefault();
}


if (myInput5.value.trim() == "") {
    let myError4 = document.getElementById('error4');
    myError4.innerHTML = "Veuillez rédiger votre message.";
    myError4.style.color = 'red';
    e.preventDefault();
} else if (document.Contact.sujetmsg.value.length < 5)  {
    alert("Veuillez rentrer au moins 5 caracteres.")
    let myError4 = document.getElementById('error4');
    myError4.innerHTML = "Veuillez rentrer au moins 5 caracteres";
    myError4.style.color = 'red';
    e.preventDefault();
}
*/
