const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const powerToggler = document.querySelector(".power-toggler");

// show slider
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// close slider
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// change theme
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

// change theme
powerToggler.addEventListener('click', () => {
    

    powerToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    powerToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})


