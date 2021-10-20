function clickFunction() {
    document.getElementById("dropdown-menu").classList.toggle("show-menu");
}
window.onclick = function(event) {

    if (!event.target.matches('.dropdown-button')) {
        if (openDropdown.classList.contains('show-menu')) {
            openDropdown.classList.remove('show-menu');
        }
    } else if (event.target.matches('.dropdown-button')) {
        openDropdown.classList.add('show-menu');
    }
}