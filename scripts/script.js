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

//BARRE D'AVERTISSEMENT

const iconeX = document.querySelector(".iconeX");
const avertiss = document.querySelector(".warning");
let iconeXClicked = localStorage.setItem("disable", false);

function disableWarning(){
  iconeXClicked = localStorage.getItem("disable");
  if(iconeXClicked == "true"){
    console.log("2nd step")
    let deactiver = "deactiver";
    let sauvArvetiss = avertiss.classList.add(deactiver);
  }
  
  else{
    iconeX.addEventListener("click", (event) => {
    console.log("3rd step")
    iconeXClicked = localStorage.setItem("disable", true);
    iconeXClicked = localStorage.getItem("disable")
    let deactiver = "deactiver";
    let sauvArvetiss = avertiss.classList.add(deactiver);
    });
  };
};
disableWarning();

const swiper = new Swiper('.caroussel', {
  // Optional parameters
  direction: 'horizontal',
  centeredSlides: true,
  loop: true,
  spaceBetween: 40,
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



/*timeline*/
gsap.from(".containerHistoire left",
{
  opacity:0,
  duration:2,
  x:-400
}
)




