/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

 let color1 = ''
 let color2 = ''

document.addEventListener('DOMContentLoaded', () => {
    wp.customize( 'hero_background_color_1', 'hero_background_color_2', function(value1, value2) {
        color1 = value1.get();
        color2 = value2.get();
        value1.bind(newValue1 => {
            color1 = newValue1;
            changeBg();
        });        
        value2.bind(newValue2 => {
            color2 = newValue2;
            changeBg();
        });
    } );

}, false);

function changeBg() {
    
    document.querySelector('header.main-header').style.background = `linear-gradient(62deg, ${color1}, ${color2})`;
}