console.log("hello world");
let headBar = document.querySelector(".main-menu");
let navSlide = document.querySelector(".nav-slide-container");
let dropDownBtns = document.querySelectorAll(".slide-nav-list-items div");
let angles = document.querySelectorAll(".slide-nav-list-items div i")

window.addEventListener("scroll",function(){
    headBar.classList.toggle("main-menu-slide" , window.scrollY > 0)
})

document.querySelector(".btn-container").addEventListener("click",function(){
    navSlide.classList.toggle("nav-slide-container-show-hide");
})
document.querySelector(".close-btn i").addEventListener("click",()=>{
    navSlide.classList.remove("nav-slide-container-show-hide");
})

angles.forEach(function(angle){
    angle.addEventListener("click",function(){
        this.classList.toggle("angle-rotate");
    })
})



