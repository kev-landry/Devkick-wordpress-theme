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
            console.log(newVal);
            document.querySelector('header.main-header').style.background = `linear-gradient(62deg, ${newVal}, ${lighten(-0.5, newVal)})`;
        } );
    } );

    function lighten(p,c0,c1) {
        let n=p<0?p*-1:p,u=Math.round,w=parseInt;
        if(c0.length>7){
            let f=c0.split(","),t=(c1?c1:p<0?"rgb(0,0,0)":"rgb(255,255,255)").split(","),R=w(f[0].slice(4)),G=w(f[1]),B=w(f[2]);
            return "rgb("+(u((w(t[0].slice(4))-R)*n)+R)+","+(u((w(t[1])-G)*n)+G)+","+(u((w(t[2])-B)*n)+B)+")"
        }else{
            let f=w(c0.slice(1),16),t=w((c1?c1:p<0?"#000000":"#FFFFFF").slice(1),16),R1=f>>16,G1=f>>8&0x00FF,B1=f&0x0000FF;
            return "#"+(0x1000000+(u(((t>>16)-R1)*n)+R1)*0x10000+(u(((t>>8&0x00FF)-G1)*n)+G1)*0x100+(u(((t&0x0000FF)-B1)*n)+B1)).toString(16).slice(1)
        }
    }

}, false);