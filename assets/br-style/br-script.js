const EXPIRATION_TIME = 600000;

function isPopupExpired() {
    const popupData = JSON.parse(localStorage.getItem('popupShown'));
    if (!popupData) {
        return true; // Si no hay datos guardados, debe mostrarse el popup
    }
    const currentTime = new Date().getTime();
    const timeDifference = currentTime - popupData.timestamp;

    return timeDifference > EXPIRATION_TIME; // Verifica si ha pasado más de 1 hora
}

html =`
    <div class="br-popup-container fade-in">
        <div class="br-popup-cerrar">
            <div class="br-cerrar">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="br-popup-modal-container" id="modal-novedad">
            <div class="br-popup-prev">
                <span></span>
                <span></span>
            </div>
                <div id="video-popup"></div>
            <div class="br-popup-next">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    `
                // <img src="assets/images/coseguros-julio.png" alt="">
// if(isPopupExpired()) {

    window.addEventListener('DOMContentLoaded', ()=> {
        const template = document.createElement('template')
        template.innerHTML = html
        
        const container = template.content.querySelector(".br-popup-container");
        const btn = template.content.querySelector('.br-popup-cerrar')
        
        container.addEventListener('animationend', mostrar(0, container))
            btn.addEventListener('click',()=> {
                container.classList.add('fade-out')
                container.addEventListener('animationend', ()=> {
                    document.body.removeChild(container)
            })
        })
        
        document.body.appendChild(template.content)
        const popupData = {
            shown: true,
            timestamp: new Date().getTime() // Guardamos la hora actual en milisegundos
        };
        // localStorage.setItem('popupShown', JSON.stringify(popupData));
    })
// }

        
const mostrar = function (elemento, container) {
    const modal = Array.from(container.querySelectorAll("#modal-novedad"));
    
    if(elemento < modal.length) {
        // console.log('Imagen', elemento)
        modal[elemento].classList.add('fade-in');

        // setTimeout( function() {
        //     modal[elemento].classList.add('fade-out');
        //     mostrar((elemento + 1), container)
        // },4500)
    } 
    // else {
    //     container.classList.add('fade-out');
    //     container.addEventListener('animationend', ()=> {
    //         document.body.removeChild(container)
    //     })
    // }
}

let player

function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-popup', {
        height:'600',
        width:'900',
        videoId:'csYJyuKetvg'
    })
}

