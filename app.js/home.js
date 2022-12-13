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

let getmodelContainer = document.getElementById("modalBox-container");
let closeModelContaier = document.getElementById("close-btn");

closeModelContaier.addEventListener("click", function(){
    getmodelContainer.style.display="none";
})

setTimeout(function(){
    getmodelContainer.style.display="grid";
},5000);

window.onclick = function(e){
    if(e.target.classList.contains("modalBox-container")){
        getmodelContainer.style.display="none";
    }
}