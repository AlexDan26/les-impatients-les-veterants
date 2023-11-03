gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(MotionPathPlugin);

const burger = document.querySelector(".burger");

gsap
.timeline()
.to(".buttonDonate",{scale: 1.2, duration: 1.5, yoyo: true, repeat: -1})
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









