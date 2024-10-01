html = `
    <div class="br-popup-container fade-in">
        <div class="br-popup-cerrar">
            <button>x</button>
        </div>
        <div class="br-popup-modal" id="modal-novedad">
        <img src="assets/images/coseguros-julio.png" alt="">
        </div>
        <div class="br-popup-modal" id="modal-novedad">
        <img src="assets/images/vacuna-covid.png" alt="">
        </div>
        <div class="br-popup-modal" id="modal-novedad">
        <img src="assets/images/antigripal-2024.png" alt="">
        </div>
        <div class="br-popup-modal" id="modal-novedad">
        <img src="assets/images/antigripal-comunidad.png" alt="">
        </div>
        </div>
        `
        // <div class="br-popup-modal" id="modal-novedad">
        //     <img src="assets/images/novedades-audiometro.png" alt="">
        // </div>
        // <div class="br-popup-modal" id="modal-novedad">
        //     <img src="assets/images/HPV-WEB.png" alt="">
        // </div>
    
    
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
})

        
const mostrar = function (elemento, container) {
    const modal = Array.from(container.querySelectorAll("#modal-novedad"));
    
    if(elemento < modal.length) {
        console.log('Imagen', elemento)
    // const btn = modal[elemento].querySelector('#modal-btn-cerrar') 
        modal[elemento].classList.add('fade-in');

        setTimeout( function() {
            modal[elemento].classList.add('fade-out');
            mostrar((elemento + 1), container)
        },4500)
    } 
    else {
        container.classList.add('fade-out');
        container.addEventListener('animationend', ()=> {
            document.body.removeChild(container)
        })
    }
}