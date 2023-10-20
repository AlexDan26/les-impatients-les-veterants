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