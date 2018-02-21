console.log("options !");


document.addEventListener('DOMContentLoaded', function(){
    console.log("hello");
    const button = document.querySelector('.devkick_image_01');
    button.addEventListener('click', con);
    function con() {
        let i = 0;
        i++;
        console.log("i =", i);
    }
}, false);


