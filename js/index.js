function hrefBerita(id){
    window.location = 'index.php?id='+id;
}

$(document).ready(function(){

    let navbar2 = document.getElementById("navbar-2");
    $(window).scroll(function(){
        let y = $(window).scrollTop();
        if( y > 0 ){
           navbar2.classList.add('shadow-active');
        } else {
            navbar2.classList.remove('shadow-active');
        }
    });
})