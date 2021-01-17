$(document).ready(function(){
    let wrapper = document.getElementById("wrapper");
    let toogle = document.getElementById("menu-toggle");
    toogle.addEventListener("click",(function() {
        wrapper.classList.toggle("toggled");
    }))
})