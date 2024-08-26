document.getElementById('registration-form').addEventListener('submit', function(event) {
    let formIsValid = true;
    let allFieldsEmpty = true;

    // Limpar mensagens de erro
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function(message) {
        message.style.display = 'none';
    });

    // Verificação se todos os campos estão vazios
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const birthdate = document.getElementById('birthdate');
    const residence = document.getElementById('residence');
    const preferences = document.getElementById('preferences');

    if (name.value.trim() === '' && email.value.trim() === '' && birthdate.value.trim() === '' && residence.value.trim() === '' && preferences.value.trim() === '') {
        alert('Por favor, preencha todos os campos do formulário.');
        formIsValid = false;
        allFieldsEmpty = false;
    }

    // Nome validation
    if (name.value.trim() === '') {
        name.classList.add('error');
        const nameError = document.getElementById('name-error');
        nameError.textContent = 'Por favor, preencha o campo Nome.';
        nameError.style.display = 'block';
        formIsValid = false;
    } else {
        name.classList.remove('error');
    }

    // E-mail validation
    if (email.value.trim() === '') {
        email.classList.add('error');
        const emailError = document.getElementById('email-error');
        emailError.textContent = 'Por favor, preencha o campo E-mail.';
        emailError.style.display = 'block';
        formIsValid = false;
    } else {
        email.classList.remove('error');
    }

    // Data de Nascimento validation
    if (birthdate.value.trim() === '') {
        birthdate.classList.add('error');
        const birthdateError = document.getElementById('birthdate-error');
        birthdateError.textContent = 'Por favor, selecione a Data de Nascimento.';
        birthdateError.style.display = 'block';
        formIsValid = false;
    } else {
        birthdate.classList.remove('error');
    }

    // Residência validation
    if (residence.value.trim() === '') {
        residence.classList.add('error');
        const residenceError = document.getElementById('residence-error');
        residenceError.textContent = 'Por favor, preencha o campo Residência.';
        residenceError.style.display = 'block';
        formIsValid = false;
    } else {
        residence.classList.remove('error');
    }

    // Preferências de Alimentação validation
    if (preferences.value.trim() === '') {
        preferences.classList.add('error');
        const preferencesError = document.getElementById('preferences-error');
        preferencesError.textContent = 'Por favor, preencha o campo Preferências de Alimentação.';
        preferencesError.style.display = 'block';
        formIsValid = false;
    } else {
        preferences.classList.remove('error');
    }


    if (!formIsValid) {
        event.preventDefault();
    } else {
        event.preventDefault(); 
        const successMessage = document.getElementById('success-message');
        successMessage.style.display = 'block';

        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 5000);
    }
});
