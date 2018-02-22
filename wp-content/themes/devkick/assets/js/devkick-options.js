console.log("options !");


document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('btn_img_01');
    const frame = wp.media({
        title: 'Select an image',
        button: {
            text: 'Use that media'
            },
        multiple: false
    });

    button.addEventListener('click', e => {
        e.preventDefault();
        frame.open()
    });
    frame.on('select', () =>{
        let objImg = frame.state().get('selection').first();
        console.log(objImg);
        let img_url = objImg.attributes.sizes.thumbnail.url;
        document.getElementById('preview_img_01').setAttribute('src', img_url);
        document.getElementById('input_img_01').setAttribute('value', img_url);
    })


}, false);

