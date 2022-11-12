console.log("hello world");
let headBar = document.querySelector(".main-menu");
window.addEventListener("scroll",function(){
    headBar.classList.toggle("main-menu-slide" , window.scrollY > 0)
})