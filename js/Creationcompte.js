var formValidationCreate = document.getElementById('SendAccountData');
    var Surname2 = document.getElementById('surname2');
    var FalseSurname2 = document.getElementById('falsesurname2')
    var Name2 = document.getElementById('name2');
    var FalseName2 = document.getElementById('falsename2');
    var myRegexName2 = /^[a-zA-Z-\s]{2,30}$/;

    var Email2 = document.getElementById('email2');
    var FalseEmail2 = document.getElementById('falsemail2');
    var myRegexEmail2 = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var ConfEmail2 = document.getElementById('confemail2');
    var FalseConfEmail2 = document.getElementById('falseconfmail2');
    
    var MotDePasse = document.getElementById('password');
    var FalseMotdePasse = document.getElementById('falsepassword');
    var myRegexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
    var ConfMdp = document.getElementById('confpwd');
    var FalseConfMdp = document.getElementById('falseconfpwd');
    //doit contenir au moins un numero, une lettre majuscule et une minuscule (?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,32}$

    var CodePostal = document.getElementById('codepostal');
    var FalseCodePostal = document.getElementById('falsecodepostal');
    var myRegexCodePostal = /^[0-9]{4,7}$/;

    var Ville = document.getElementById('ville');
    var FalseVille = document.getElementById('falseville');
    var myRegexVille = /^[a-zA-Z-\s]{2,30}$/;

    var Numero = document.getElementById('number');
    var FalseNumero = document.getElementById('falsenumber');
    var myRegexNumero = /^[0-9]{7,15}$/;

    var Address= document.getElementById('address');
    var FalseAddress = document.getElementById('falseaddress');
    var myRegexAddress = /^[a-zA-Z0-9\s,.'-]{3,}$/;

/*
    var Date = document.getElementById('date2');
    var DateMax = Date(01/02/1910)
    var FalseDate2 = document.getElementById('falsedate2');
    var myRegexDate2 =  /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    //var myRegexDateMin = /^[01]{1}
   */

    formValidationCreate.addEventListener('click', validation1);
            
    function validation1(e){
        if (Surname2.validity.valueMissing){       //Si le champ est vide
            e.preventDefault();
            FalseSurname2.textContent = 'Veuillez insérer votre nom.';
            FalseSurname2.style.color = 'red';

        }else if (myRegexName2.test(Surname2.value) == false){
            e.preventDefault();
            FalseSurname2.textContent = 'Veuillez utiliser des lettres, espaces et tirets si besoin.';
            FalseSurname2.style.color = 'red';
        }

        if (Name2.validity.valueMissing){
            e.preventDefault();
            FalseName2.textContent = 'Veuillez insérer votre prénom.';
            FalseName2.style.color = 'red';
        }else if (myRegexName2.test(Name2.value) == false){
            e.preventDefault();
            FalseName2.textContent = 'Veuillez utiliser des lettres, espaces et tirets';
            FalseName2.style.color = 'red';
        }

        if (Email2.validity.valueMissing){
            e.preventDefault();
            FalseEmail2.textContent = 'Veuillez insérer votre adresse mail.';
            FalseEmail2.style.color = 'red';
        }else if (myRegexEmail2.test(Email2.value) == false){
            e.preventDefault();
            FalseEmail2.textContent = 'Veuillez rentrer une adresse mail existante, sous forme aaaaa@bbbbb.ccc';
            FalseEmail2.style.color = 'red';
        }
        
        if (ConfEmail2.validity.valueMissing){
            e.preventDefault();
            FalseConfEmail2.textContent = 'Veuillez confirmer votre adresse mail.';
            FalseConfEmail2.style.color = 'red';
        }else if (Email2.value != ConfEmail2.value) {
            e.preventDefault();
            FalseConfEmail2.textContent = 'Les deux adresses mail ne correspondent pas.';
            FalseConfEmail2.style.color = 'red';
        }
        
    //Date de naissance//Adresse//Pays
    //testDate de naissance
    /*if (Date.validity.valueMissing){       //Si le champ est vide
        e.preventDefault();
        FalseDate2.textContent = 'Veuillez insérer votre date de naissance.';
        FalseDate2.style.color = 'red';
    }else if (Date.value >= DateMax.value) {
        e.preventDefault();
        FalseDate2.textContent = 'Votre date de naissance doit etre inferieur au 01/02/2005 et superieur au 01/02/1910';
        FalseDate2.style.color = 'red';
    }*/
        //

    if (MotDePasse.validity.valueMissing){       //Si le champ est vide
        e.preventDefault();
        FalseMotdePasse.textContent = 'Veuillez insérer un mot de passe.';
        FalseMotdePasse.style.color = 'red';

    }else if (myRegexPassword.test(MotDePasse.value) == false){
        e.preventDefault();
        FalseMotdePasse.textContent = 'Veuillez utiliser au moins une lettre minuscule, majuscule, un nombre, un caractere special (!@#$%^&*), et plus de 7 signes.';
        FalseMotdePasse.style.color = 'red';
    }

    if (ConfMdp.validity.valueMissing){ //conf mot de passe
        e.preventDefault();
        FalseConfMdp.textContent = 'Veuillez confirmer votre mot de passe.';
        FalseConfMdp.style.color = 'red';
    }else if (MotDePasse.value != ConfMdp.value) {
        e.preventDefault();
        FalseConfMdp.textContent = 'Les deux mot de passe rentrés ne correspondent pas.';
        FalseConfMdp.style.color = 'red';
    }

    if (Address.validity.valueMissing){
        e.preventDefault();
        FalseAddress.textContent = 'Veuillez insérer votre prénom.';
        FalseAddress.style.color = 'red';
    }else if (myRegexAddress.test(Address.value) == false){
        e.preventDefault();
        FalseAddress.textContent = 'Veuillez utiliser des lettres, espaces et tirets';
        FalseAddress.style.color = 'red';
    }

    if (CodePostal.validity.valueMissing){       //Si le champ est vide
        e.preventDefault();
        FalseCodePostal.textContent = 'Veuillez insérer votre Code Postal.';
        FalseCodePostal.style.color = 'red';

    }else if (myRegexCodePostal.test(CodePostal.value) == false){
        e.preventDefault();
        FalseCodePostal.textContent = 'Veuillez utiliser des numéros, avec un minimum de caractères de 4 et max de 7 .';
        FalseCodePostal.style.color = 'red';
    }

    if (Ville.validity.valueMissing){       //Si le champ est vide
        e.preventDefault();
        FalseVille.textContent = 'Veuillez insérer le nom de votre ville.';
        FalseVille.style.color = 'red';

    }else if (myRegexVille.test(Ville.value) == false){
        e.preventDefault();
        FalseVille.textContent = 'Veuillez utiliser des lettres, tirets et espaces si necessaire.';
        FalseVille.style.color = 'red';
    }

    if (Numero.validity.valueMissing){       //Si le champ est vide
        e.preventDefault();
        FalseNumero.textContent = 'Veuillez insérer votre numéro de telephone.';
        FalseNumero.style.color = 'red';

    }else if (myRegexNumero.test(Numero.value) == false){
        e.preventDefault();
        FalseNumero.textContent = 'Veuillez rentre 7 et 15 numéros.';
        FalseNumero.style.color = 'red';
    }
    }
        
/* A REVOIR DATE
        if (Date.validity.valueMissing){
            e.preventDefault();
            FalseDate.textContent = 'Veuillez insérer votre date.';
            FalseDate.style.color = 'red';
        }else if (myRegexDate.test(Date.value) == false){
            e.preventDefault();
            FalseDate.textContent = 'Veuillez rentrer une date existante.';
            FalseDate.style.color = 'red';
        } */
