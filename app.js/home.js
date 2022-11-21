console.log("hello world");
let headBar = document.querySelector(".main-menu");
let navSlide = document.querySelector(".nav-slide-container");
let dropDownBtns = document.querySelectorAll(".slide-nav-list-items div");
let angles = document.querySelectorAll(".slide-nav-list-items div i")
// let getModelBox = document.getElementById("modelBox-container");
// let getModelCloseBtn = document.getElementById("modelClose");
// let getModelCloseAdmBtn = document.getElementById("modeladmClose");
// let getadmBtn = document.getElementById("adm-page");
// let getuserBtn = document.getElementById("user-page");
// let admLogInPage = document.getElementById("adm_logIn_page");
// let userLogInPage = document.getElementById("user_logIn_page")



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

// getModelCloseBtn.addEventListener("click",()=>{
//     getModelBox.classList.remove("modelBox-container-ani");
// })
// modeladmClose.addEventListener("click",()=>{
//     getModelBox.classList.remove("modelBox-container-ani");
// })
// setTimeout(()=>{
//     getModelBox.classList.add("modelBox-container-ani");
// },2000)

// window.onclick = function(e){
//     if(e.target === getModelBox){
//         getModelBox.classList.remove("modelBox-container-ani");
//     }
// }
// getadmBtn.addEventListener("click",function(){
//     userLogInPage.style.display = "none";
//     admLogInPage.style.display = "grid"
// })

// getuserBtn.addEventListener("click",function(){
//     userLogInPage.style.display = "grid";
//     admLogInPage.style.display = "none"
// })