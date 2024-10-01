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

const html =`
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
                <div id="br-popup-modal-content"></div>
                <div id="video-popup"></div> <!-- Aquí va el video -->
                <div>
                    <img src="/assets/images/coseguros-julio.png" alt="imagen-coseguros"/>
                </div>
            <div class="br-popup-next">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    `

window.addEventListener('DOMContentLoaded', ()=> {
    const template = document.createElement('template');
    template.innerHTML = html;
    
    const container = template.content.querySelector(".br-popup-container");
    const btn = template.content.querySelector('.br-popup-cerrar');
    
    container.addEventListener('animationend', mostrar(0, container));
    btn.addEventListener('click',()=> {
        container.classList.add('fade-out');
        container.addEventListener('animationend', ()=> {
            document.body.removeChild(container);
        });
    });
    
    document.body.appendChild(template.content);

    // Aquí puedes asegurarte de que el div #video-popup está presente antes de cargar el reproductor
    if (document.getElementById('video-popup')) {
        createYouTubePlayer(); // Llama a la función para crear el reproductor de YouTube
    }
    
    const popupData = {
        shown: true,
        timestamp: new Date().getTime() // Guardamos la hora actual en milisegundos
    };
    // localStorage.setItem('popupShown', JSON.stringify(popupData));
});

const mostrar = function (elemento, container) {
    const modal = Array.from(container.querySelectorAll("#modal-novedad"));
    
    if(elemento < modal.length) {
        modal[elemento].classList.add('fade-in');
    }
}

// Función para crear el reproductor de YouTube
function createYouTubePlayer() {
    if (typeof YT !== 'undefined' && YT && YT.Player) { // Asegurarse de que la API de YouTube está cargada
        player = new YT.Player('video-popup', {
            height: '600',
            width: '900',
            videoId: 'csYJyuKetvg',
            playerVars: {
                'controls': 2,         // Mostrar solo los controles mínimos
                'rel': 0,              // No mostrar videos relacionados de otros canales
                'modestbranding': 1,   // Minimiza el branding de YouTube
                'playsinline': 1,      // Reproducción en línea en dispositivos móviles
                'autoplay': 1,         // Reproducción automática
                'mute': 1,             // Silencia el video al iniciar
                'fs': 1,               // Habilitar el botón de pantalla completa
                'iv_load_policy': 3,   // Desactivar las anotaciones
                'showinfo': 0          // Inicia en silencio para permitir autoplay
              },
        });
    } else {
        console.log('API de YouTube aún no está lista. Intentando nuevamente...');
        setTimeout(createYouTubePlayer, 500); // Vuelve a intentar crear el reproductor después de un retraso
    }
}

// Si la API de YouTube ya está lista, se invocará esta función
function onYouTubeIframeAPIReady() {
    if (document.getElementById('video-popup')) {
        createYouTubePlayer(); // Llama a la función para crear el reproductor de YouTube
    }
}
