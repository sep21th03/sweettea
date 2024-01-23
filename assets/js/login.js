// const user_btn = document.querySelector('.bi-person')
// const modal = document.querySelector('.modal-container')
// const close_login = document.getElementById('close_login')
// const close_signup = document.getElementById('close_signup')

// function showLogin(){
//     modal.classList.add('open')
// }

// function hideLogin(){
//     modal.classList.remove('open')
// }

// user_btn.addEventListener('click', showLogin)
// close_login.addEventListener('click', hideLogin)
// close_signup.addEventListener('click', hideLogin)

const user_btn = document.getElementById("showmodal");
const modal = document.querySelector(".modal-container");
const close_login = document.getElementById("close_login");
const close_signup = document.getElementById("close_signup");

function showModel(id) {
  modal.classList.add("open");
  document.getElementById(id).style.display = "block";
}

function hideLogin(id) {
  document.getElementById(id).style.display = "none";
}

user_btn.addEventListener("click", function () {
  showModel("login");
});
document.getElementById("show_reg").addEventListener("click", function () {
  hideLogin("login");
  showModel("reg");
});

document.getElementById("show_login").addEventListener("click", function () {
    hideLogin("reg");
    showModel("login");
});

document.getElementById("close_login").addEventListener("click", function () {
    hideLogin("login");
    modal.classList.remove('open')
});

  document.getElementById("close_signup").addEventListener("click", function () {
    hideLogin("reg");
    modal.classList.remove('open')
});
