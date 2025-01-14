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