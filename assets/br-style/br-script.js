const EXPIRATION_TIME = 60000;
let currentPage = 0; // Para rastrear la página actual
let pages = [];


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
            <div class="br-popup-next">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    `
    const contentVideo = `<div id="video-popup"></div> <!-- Aquí va el video -->`
    const contentImg = `<div>
                        <img src="/assets/images/coseguros-julio.png" alt="imagen-coseguros"/>
                        </div>`

if(isPopupExpired()) {

    window.addEventListener('DOMContentLoaded', ()=> {
        const template = document.createElement('template');
    template.innerHTML = html;
    
    const container = template.content.querySelector(".br-popup-container");
    const btn = template.content.querySelector('.br-popup-cerrar');
    const btnPrev = template.content.querySelector('.br-popup-prev');
    const btnNext = template.content.querySelector('.br-popup-next');
    
    container.addEventListener('animationend', mostrar(0, container));
    
    btn.addEventListener('click',()=> {
        container.classList.add('fade-out');
        container.addEventListener('animationend', ()=> {
            document.body.removeChild(container);
        });
    });
    
    btnPrev.addEventListener('click',showPrevPage)
    btnNext.addEventListener('click',showNextPage)
    
    document.body.appendChild(template.content);
    
    pages = [
        { type: 'video', id: 'video-popup' }, // Video YouTube
        { type: 'image', src: '/assets/images/coseguros-octubre.png' } // Imagen
    ];
    
    // Aquí puedes asegurarte de que el div #video-popup está presente antes de cargar el reproductor
    if (document.getElementById('video-popup')) {
        createYouTubePlayer(); // Llama a la función para crear el reproductor de YouTube
    }
    
    const popupData = {
        shown: true,
        timestamp: new Date().getTime() // Guardamos la hora actual en milisegundos
    };
    
    showPage(currentPage)
    
    localStorage.setItem('popupShown', JSON.stringify(popupData));

    setTimeout(()=>{
        container.classList.add('fade-out');
        container.addEventListener('animationend', ()=> {
            document.body.removeChild(container);
        });
    }, 40000)
});
}

function showPage(index) {
    const contentDiv = document.getElementById('br-popup-modal-content');
    contentDiv.innerHTML = ''; // Limpiamos el contenido anterior

    const page = pages[index];
    
    if (page.type === 'video') {
        contentDiv.innerHTML = '<div id="video-popup"></div>'; // Añadimos el contenedor del video
        createYouTubePlayer(); // Inicializamos el reproductor de YouTube
    } else if (page.type === 'image') {
        contentDiv.innerHTML = `<img src="${page.src}" alt="imagen-popup" />`; // Añadimos la imagen
    }
}

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
            videoId: 'csYJyuKetvg',
            playerVars: {
                'controls': 2,      
                'rel': 0,           
                'modestbranding': 1,
                'playsinline': 1,   
                'autoplay': 1,      
                'mute': 1,          
                'fs': 1,            
                'iv_load_policy': 3,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange
            }     
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

// Mostrar la página anterior
function showPrevPage() {
    if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
    }
}

// Mostrar la siguiente página
function showNextPage() {
    if (currentPage < pages.length - 1) {
        currentPage++;
        showPage(currentPage);
    }
}

function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.ENDED) {
        showNextPage(); // Cambiar a la siguiente página cuando el video termine
    }
}
