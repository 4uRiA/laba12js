const form = document.querySelector('.autorize-form');
const login = form.querySelector("#username");
const password = form.querySelector("#password");
form.addEventListener('submit', (evt) => {
    evt.preventDefault();
    const logVal = login.value;
    const passVal = password.value;
    if (!logVal || !passVal) {
        alert('Все поля должны быть заполнены!');
        return;
    }
    if (!isValidLogin(logVal)) {
        alert('Логин может содержать только буквы на латинице и цифры');
    }
    if (!isValidPassword(passVal)) {
        alert('Пароль должен содержать как минимум одну заглавную букву, одну строчную букву и одну цифру');
        return;
    }
    form.submit();
});
function isValidLogin(login) {
    const pattern = /^[a-zA-Z0-9]+$/;
    return pattern.test(login);
  }
function isValidPassword(password) {
    const pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,20}$/;
    return pattern.test(password);
  }