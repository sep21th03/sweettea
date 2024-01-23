const btn_toggler = document.getElementsByClassName('navbar-toggler')[0]
const toggler_menu = document.getElementsByClassName('toggler-menu-hid')[0]


btn_toggler.addEventListener('click', function(e){
    if (toggler_menu.classList.contains('active-toggler')) {
        toggler_menu.classList.remove('active-toggler');
    } else {
        toggler_menu.classList.add('active-toggler');
    }
}
)

const btn_person_gear = document.getElementById('person-gear');
const navbardropdown = document.getElementById('NavbarDropdown');


btn_person_gear.addEventListener('click', function(e){
    console.log(e.target);
    if (navbardropdown.classList.contains('display-none')) {
        navbardropdown.classList.remove('display-none');
    } else {
        navbardropdown.classList.add('display-none');
    }
})