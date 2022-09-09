function adapt(){
    const menuButt = document.getElementById('mobMenu')
    const menu = document.getElementById('menu');
    if (window.innerWidth <= 900) {
        document.getElementById('hiddenMenu').append(menu);
    }

    const toggler = new Toggler;
    menuButt.addEventListener('click', () => {
        toggler.toggleSlide('hiddenMenu', 'left', 0.6);
        toggler.toggleClass('menuOpener', "fa-bars", "fa-xmark")
    })
}