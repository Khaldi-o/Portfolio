/*RECUPERER MODAL POP UP */
var modal = document.getElementById('simpleModal');
var modal2= document.getElementById('simpleModal2');
var modal3= document.getElementById('simpleModal3'); 
var modal4= document.getElementById('simpleModal4'); 
var modal5= document.getElementById('simpleModal5'); 

var modalBtn = document.getElementById('modalBtn'); // get button détails
var modalBtn2 = document.getElementById('modalBtn2');
var modalBtn3 = document.getElementById('modalBtn3');
var modalBtn4 = document.getElementById('modalBtn4');
var modalBtn5 = document.getElementById('modalBtn5');

var closeBtn = document.getElementById('Btnclose'); //get close button
var closeBtn2 = document.getElementById('Btnclose2');
var closeBtn3 = document.getElementById('Btnclose3');
var closeBtn4 = document.getElementById('Btnclose4');
var closeBtn5 = document.getElementById('Btnclose5');


modalBtn.addEventListener('click', openModal); // ouvrir click
modalBtn2.addEventListener('click', openModal2);
modalBtn3.addEventListener('click', openModal3);
modalBtn4.addEventListener('click', openModal4);
modalBtn5.addEventListener('click', openModal5);


closeBtn.addEventListener('click', closeModal); // fermer click
closeBtn2.addEventListener('click', closeModal2);
closeBtn3.addEventListener('click', closeModal3);
closeBtn4.addEventListener('click', closeModal4);
closeBtn5.addEventListener('click', closeModal5);


window.addEventListener('click', clickOutside);

/*fonction open mdal*/
function openModal(){
    modal.style.display= 'block';
    document.body.style.overflow = "hidden";
}

function openModal2(){
    modal2.style.display= 'block';
    document.body.style.overflow = "hidden";
}

function openModal3(){
    modal3.style.display= 'block';
    document.body.style.overflow = "hidden";
}

function openModal4(){
    modal4.style.display= 'block';
    document.body.style.overflow = "hidden";
}

function openModal5(){
    modal5.style.display= 'block';
    document.body.style.overflow = "hidden";
}
/*fonction close modal*/
function closeModal(){
    modal.style.display= 'none';
    document.body.style.overflow = "auto";
}

function closeModal2(){
    modal2.style.display= 'none';
    document.body.style.overflow = "auto";
}

function closeModal3(){
    modal3.style.display= 'none';
    document.body.style.overflow = "auto";
}

function closeModal4(){
    modal4.style.display= 'none';
    document.body.style.overflow = "auto";
}

function closeModal5(){
    modal5.style.display= 'none';
    document.body.style.overflow = "auto";
}
/*fonction clicker outside modal*/
function clickOutside(e){
    if(e.target == modal || e.target == modal2 || e.target == modal3 || e.target ==modal4 || e.target == modal5){
        modal.style.display='none';
        modal2.style.display='none';
        modal3.style.display='none';
        modal4.style.display='none';
        modal5.style.display='none';

        document.body.style.overflow = "auto";
    }
}


/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
  /*Active link*/
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
  
  /*Remove menu mobile*/
  const navMenu = document.getElementById('nav-menu');
  navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.home__title',{}); 
sr.reveal('.button',{delay: 200}); 
sr.reveal('.home__img',{delay: 400}); 
sr.reveal('.home__social-icon',{ interval: 200}); 

/*SCROLL ABOUT*/
sr.reveal('.about__img',{}); 
sr.reveal('.about__subtitle',{delay: 400}); 
sr.reveal('.about__text',{delay: 400}); 



/*SCROLL SKILLS*/
sr.reveal('.skills__subtitle',{}); 
sr.reveal('.skills__text',{}); 
sr.reveal('.skills__data',{interval: 200}); 
sr.reveal('.skills__img',{delay: 600});

/*SCROLL WORK*/
sr.reveal('.work__img',{interval: 200}); 


/*SCROLL CONTACT*/
sr.reveal('.contact__input',{interval: 200}); 
