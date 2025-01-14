const loginButton = document.getElementById("login-button");
const signupButton = document.getElementById("signup-button");
const loginForm = document.getElementById("login-form");
const signupForm = document.getElementById("signup-form");

loginButton.addEventListener("click", () => {
  // Alternar classes ativas para o botão e formulários
  loginButton.classList.add("active");
  signupButton.classList.remove("active");
  loginForm.classList.add("active");
  signupForm.classList.remove("active");
});

signupButton.addEventListener("click", () => {
  signupButton.classList.add("active");
  loginButton.classList.remove("active");
  signupForm.classList.add("active");
  loginForm.classList.remove("active");
});

function mostra() {
    const camposenha = document.getElementById('senha')
    const icone = document.getElementById("olho")

    if (camposenha.getAttribute('type') == 'password') {
      icone.classList.remove("bi-eye")
      icone.classList.add("bi-eye-slash")
      camposenha.setAttribute('type', 'text')

    } else {
      icone.classList.remove("bi-eye-slash")
      icone.classList.add("bi-eye")
      camposenha.setAttribute('type', 'password')
    }
  }