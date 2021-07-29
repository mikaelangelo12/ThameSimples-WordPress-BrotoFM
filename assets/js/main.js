prog = new Date();
hour = prog.getHours();

if (hour >= 4) {
    const programa = document.getElementById("programaHorario")
    programa.innerHTML = "Manha Broto"
}

if (hour >= 4) {
    const programa = document.getElementById("locutorHorario")
    programa.innerHTML = "José Roberto"
}

/*
if (hour >= 8) {

    const programa = document.getElementById("imgLocutor");
    programa.innerHTML = "<img src=\"http://localhost:8888/brotofm.com.br/wp-content/uploads/2021/07/ze.jpeg\">";

}*/
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    // autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});

