gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(MotionPathPlugin);

const burger = document.querySelector(".burger");

gsap
.timeline()
.to(".buttonDonate",{scale: 1.2, duration: 1.5, yoyo: true, repeat: -1})
gsap
.timeline()
.to(".buttonDonateFoot",{scale: 1.2, duration: 1.5, yoyo: true, repeat: -1})
gsap
.timeline()
.to(".svg404",{rotate:"720",duration:3, opacity:"100%"})

burger.addEventListener("mouseover", (event) => {
    gsap
.timeline()
.to(".burger",{scale: 1.2, duration: 1.5, yoyo: true})
});

burger.addEventListener("mouseout", (event) => {
    gsap
.timeline()
.to(".burger",{scale: 1, duration: 1.5, yoyo: true})
});

//BARRE D'AVERTISSEMENT

const iconeX = document.querySelector(".iconeX");
const avertiss = document.querySelector(".warning");
iconeX.addEventListener("click", (event) => {
  localStorage.setItem("disable", true);
  let deactiver = "deactiver";
  let sauvArvetiss = avertiss.classList.add(deactiver);
 });



function disableWarning(){

  console.log(localStorage.getItem("disable"));

  if(localStorage.getItem("disable") != null){
    console.log("2nd step")
    let deactiver = "deactiver";
    let sauvArvetiss = avertiss.classList.add(deactiver);
  };
};
disableWarning();


/*Timeline pour HISTOIRE*/ 

gsap.from('.One', {scrollTrigger: {markers: true,start: 'top 75%',end: 'bottom 25%',trigger: '.One',},
  opacity:0,
  x: '100%',
  duration: 2,
});

gsap.from('.Two', {
  scrollTrigger: {
    markers: true,
    start: 'top 75%',
    end: 'bottom 25%',
   
    trigger: '.Two',
  },
  opacity:0,
  x: '-100%',
  duration: 2,
});
gsap.from('.Three', {
  scrollTrigger: {
    markers: true,
    start: 'top 75%',
    end: 'bottom 25%',
   
    trigger: '.Three',
  },
  opacity:0,
  x: '100%',
  duration: 2,
});

gsap.from('.Four', {
  scrollTrigger: {
    markers: true,
    start: 'top 75%',
    end: 'bottom 25%',
   
    trigger: '.Four',
  },
  opacity:0,
  x: '-100%',
  duration: 2,
});
const swiper = new Swiper('.caroussel', {
  // Optional parameters
  direction: 'horizontal',
  centeredSlides: true,
  loop: true,
  spaceBetween: 40,
  autoplay:{
    delay: 3000
  },
  //slidesPerView: 3,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});


let btn_plus    = document.querySelector('.plus');
let cacher   = document.querySelector('.hidden');
let hidden  = true;


cacher.style.display = 'none';
cacher.style.overflow= 'hidden';

btn_plus.addEventListener('click', () => {
  
  if(hidden){
    cacher.style.display = 'block';
    cacher.style.overflow= 'visible';
    hidden = false;
  } 
  else{
    cacher.style.display = 'none';
    cacher.style.overflow= 'hidden';
    hidden = true;
  }
})


