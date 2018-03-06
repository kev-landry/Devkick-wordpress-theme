/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

document.addEventListener('DOMContentLoaded', () => {
    wp.customize( 'hero_background_color_1', 'hero_background_color_2', function(value1, value2) {
        console.table(value1, value2);
        value1.bind(newValue1 => {
            value2.bind(newValue2 => {
                document.querySelector('header.main-header').style.background = `linear-gradient(62deg, ${newValue1}, ${newValue2})`;
            });
        });
        } );

    }, false);

// document.addEventListener('DOMContentLoaded', () => {
//     console.log(wp.customize);
//     wp.customize( 'hero_background_color_1', 'hero_background_color_2', function(value1, value2) {
//         let array = [value1, value2];
//         array.forEach(element => {
//             element.bind( val => {

//             })
//         });
//         value1.bind( function(newVal1, newVal2) {
//             console.log(newVal1,newval2);
//             document.querySelector('header.main-header').style.background = `linear-gradient(62deg, ${newVal1}, ${newVal2})`;
//         } );
//     } );

// }, false);

// document.addEventListener('DOMContentLoaded', () => {
//     console.log("customizer JS");
//         wp.customize( 'hero_background_color_1', value => {
//             value.bind( newVal => {
//                 console.log(newVal);
//                 document.querySelector('header.main-header').style.background = `linear-gradient(62deg, ${newVal}, #282b36)`;
//             } );
//         } );

//     }, false);