document.addEventListener('DOMContentLoaded', function () {
    M.AutoInit();
});

function validateForm() {
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let naissance = document.getElementById('naissance').value;
    let email = document.getElementById('email').value;
    let telephone  = document.getElementById('telephone').value;
    let telephonePere  = document.getElementById('telephonePere').value;
    let telephoneMere  = document.getElementById('telephoneMere').value;

    
    if (nom === '' || prenom === '' || naissance === '' || email === '') {
        alert('Veuillez remplir tous les champs obligatoires.');
        event.preventDefault();
        return false;
    }

    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!email.match(emailPattern)) {
        alert('Veuillez entrer une adresse e-mail valide.');
        event.preventDefault();
        return false;
    }

    if (!isMoroccanPhoneNumber(telephone)) {
        alert('Veuillez entrer numéro téléphone valide.');
        event.preventDefault();
        return false;
    }
    if (!isMoroccanPhoneNumber(telephonePere)) {
        alert('Veuillez entrer numéro téléphone valide le champ père .');
        event.preventDefault();
        return false;
    }
    if (!isMoroccanPhoneNumber(telephoneMere)) {
        alert('Veuillez entrer numéro téléphone valide dans le champ mère  .');
        event.preventDefault();
        return false;
    }

    
    document.getElementById('registrationForm').submit();
}

function isMoroccanPhoneNumber(phoneNumber) {
    const moroccanPhoneRegex = /^(\+212|00212|0)([567]\d{8}|[567]\d-\d{2}-\d{2}-\d{2}|[567]\d \d{2} \d{2} \d{2})$/;
    return moroccanPhoneRegex.test(phoneNumber);
  }
