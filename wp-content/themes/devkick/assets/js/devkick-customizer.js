/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

document.addEventListener('DOMContentLoaded', () => {
console.log("customizer JS");
    wp.customize( 'hero_background_color', value => {
        value.bind( newVal => {
            document.body.style.background = newVal;
        } );
    } );

}, false);