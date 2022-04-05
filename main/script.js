const menu = document.getElementById('nav-menu');
const menuBtn = document.querySelector('.menu-btn');
const closeBtn = document.querySelector('.cancel-btn');
const menuLinks = document.querySelectorAll('#nav-menu a[href^="#"]');
const sections = document.querySelectorAll('section');
const navList = document.querySelectorAll('.nav a');

const options = {
    threshold: "0.6",
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
        if (e.isIntersecting) {
         navList.forEach((link) => {
                if (e.target.id === link.dataset.nav) {
                    link.classList.add('selected');
                } else {
                    link.classList.remove('selected');

                }
            })
        }
    });
}, options);

sections.forEach((section) => {
    observer.observe(section);
});

menuLinks.forEach(menuLink => {
    menuLink.addEventListener('click', function() {
        menu.classList.remove('active');
    })
})

menuBtn.addEventListener('click', function() {
    menu.classList.add('active');
})
closeBtn.addEventListener('click', function() {
    menu.classList.remove('active');
})

const bLight = document.getElementById('icon');
const changeIcon = document.querySelector('.iconChange');

bLight.addEventListener('click', function() {
    document.body.classList.toggle('blight');
    bLight.classList.toggle('active');

    if (document.body.classList.contains('blight')) {
        localStorage.setItem('lightMode', 'true');
    } else {
        localStorage.setItem('lightMode', 'false');
    }

    if (document.body.classList.contains('blight')) {
        changeIcon.src = "../img/sun.png";
    } else {
        changeIcon.src = "../img/moon.png";
    }
});

if (localStorage.getItem('lightMode') === 'true') {
    document.body.classList.add('blight');
    changeIcon.src = "../img/sun.png";
} else {
    document.body.classList.remove('blight');
    changeIcon.src = "../img/moon.png";
}




window.addEventListener('scroll', (e) => {
    const nav = document.getElementById('navbar');

    if ( scrollY >= 100) {
        nav.classList.add('scroll');
    } else {
        nav.classList.remove('scroll');
    }
});

var typed = new Typed('.type', {
    strings: ['Frontend', 'Designer', 'Student'],
    typeSpeed: 100,
    backSpeed: 70,
    loop: true,
  });