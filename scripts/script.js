gsap.registerPlugin(ScrollTrigger); //Extension ScrollTrigger
gsap.registerPlugin(MotionPathPlugin); //Extension Motion path

//BOUTON HAMBURGERS ET DONS
const burger = document.querySelector(".burger");//Le bouton Hamburger du menu Nav lorsqu'il est en affichage mobile

gsap
.timeline()
.to(".buttonDonate",{scale: 1.2, duration: 1.5, yoyo: true, repeat: -1}) //Animation du bouton Don du menu Nav
gsap
.timeline()
.to(".buttonDonateFoot",{scale: 1.2, duration: 1.5, yoyo: true, repeat: -1}) //Animation du bouton Don du footer
gsap
.timeline()
.from(".svg404",{opacity: "0%"})
.to(".svg404",{stagger: 1, duration:3, opacity:"100%"}) //Animation de l'erreur 404

burger.addEventListener("mouseover", (event) => { //Lorsqu'on survole le bouton Hamburger avec la souris...
    gsap
.timeline()
.to(".burger",{scale: 1.2, duration: 1.5, yoyo: true}) //... Il grossit
});

burger.addEventListener("mouseout", (event) => { //Lorsqu'on enlève la souris du bouton Hamburger...
    gsap
.timeline()
.to(".burger",{scale: 1, duration: 1.5, yoyo: true}) //... Il rétrécit
});

//BANNIÈRE D'AVERTISSEMENT
const iconeX = document.querySelector(".iconeX"); //L'icône X de la bannière
const avertiss = document.querySelector(".warning"); //La bannière
iconeX.addEventListener("click", (event) => { //Lorsque l'icône est cliquée...
  localStorage.setItem("disable", true);
  let deactiver = "deactiver";
  let sauvArvetiss = avertiss.classList.add(deactiver); //...Donner la classe pour faire disparaitre la bannière
 });

//GARDER LA BANNIÈRE FERMÉE
function disableWarning(){

  console.log(localStorage.getItem("disable"));

  if(localStorage.getItem("disable") != null){ //Si la variable est "TRUE"...
    console.log("2nd step")
    let deactiver = "deactiver";
    let sauvArvetiss = avertiss.classList.add(deactiver); //... la claase sera ajouté au chargement de la page et sera fermé par défaut
  };
};
disableWarning();


/*ANIMATION DE LA PAGE D'HISTOIRE*/ 
gsap.from('.One', {scrollTrigger: { //Animation au fur et à mesure que l'on défile la page
  /*markers: true,
  start: '60% 75%',
  end: '75% 75%',*/
  toggleActions: 'restart complete reverse ', // Effectuer l'animation, puis la jouer à l'envers lorsque le scroll va à l'envers
  trigger: '.One', //La section qui déclenche l'animation
},
  opacity:0, //La section de viendra de plus en plus opaque
  x: '100%', //Et elle va se décaler
  duration: 2, //Et l'animation va durer 2 secondes
});

gsap.from('.Two', {
  scrollTrigger: { //Animation au fur et à mesure que l'on défile la page
    /*markers: true,
  start: '60% 75%',
  end: '75% 75%',*/
    toggleActions: 'restart complete reverse ', // Effectuer l'animation, puis la jouer à l'envers lorsque le scroll va à l'envers
    trigger: '.Two', //La section qui déclenche l'animation
  },
  opacity:0, //La section de viendra de plus en plus opaque
  x: '-100%', //Et elle va se décaler
  duration: 2, //Et l'animation va durer 2 secondes
});
gsap.from('.Three', {
  scrollTrigger: { //Animation au fur et à mesure que l'on défile la page
    /*markers: true,
  start: '60% 75%',
  end: '75% 75%',*/
    toggleActions: 'restart complete reverse ',// Effectuer l'animation, puis la jouer à l'envers lorsque le scroll va à l'envers
    trigger: '.Three', //La section qui déclenche l'animation
  },
  opacity:0, //La section de viendra de plus en plus opaque
  x: '100%', //Et elle va se décaler
  duration: 2, //Et l'animation va durer 2 secondes
});

gsap.from('.Four', {
  scrollTrigger: { //Animation au fur et à mesure que l'on défile la page
    /*markers: true,
  start: '60% 75%',
  end: '75% 75%',*/
    toggleActions: 'restart complete reverse', // Effectuer l'animation, puis la jouer à l'envers lorsque le scroll va à l'envers
    trigger: '.Four', //La section qui déclenche l'animation
  },
  opacity:0, //La section de viendra de plus en plus opaque
  x: '-100%', //Et elle va se décaler
  duration: 2, //Et l'animation va durer 2 secondes
});
const swiper = new Swiper('.caroussel', {
  // Optional parameters
  direction: 'horizontal', //Direction Horizontale
  centeredSlides: true, //Diapositives Centrées
  loop: true, //Le diaporama boucle sur elle même
  spaceBetween: 40, //Espace entre les diapositives
  autoplay:{
    delay: 3000
  },

 //Pagination
  pagination: {
    el: '.swiper-pagination',
  },
});

//HUB DE NOUVELLES
let btn_plus    = document.querySelector('.plus'); //Bouton pour plus de nouvelles
let cacher   = document.querySelector('.hidden'); //La section de nouvelles cachées
let hidden  = true;


cacher.style.display = 'none'; //Cacher les nouvelles cachées par défaut
cacher.style.overflow= 'hidden'; //Cacher toutce qui déborde

btn_plus.addEventListener('click', () => {//Lorsque le bouton "Plus de nouvelles" est cliqué...
  
  if(hidden){
    cacher.style.display = 'block'; //Il rendre la section de nouvelles cachées visible
    cacher.style.overflow= 'visible';
    hidden = false;
  } 
  else{
    cacher.style.display = 'none'; //Il faut la garder cachée
    cacher.style.overflow= 'hidden';
    hidden = true;
  }
})


