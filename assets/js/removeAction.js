import { Ajaxyear } from "./recap.js";


const modal = document.querySelector('.modal-adherer');
const dataId = document.querySelectorAll('.data-id');
const trash = document.querySelectorAll('.modal-open-delete');
const btnNo = document.querySelector('.btn-no');
const btnYes = document.querySelector('.btn-yes');
const main = document.querySelector('.content-container');



// EVENT POUR OUVRIR LE MODAL 
const openModal = () => {
    modal.dataset.active = true;
    main.style.opacity = '0.4';
}

const closeModal = () => {
    delete modal.dataset.active;
    main.style.opacity = '1';

}

// INITIE LA VARIABLE AVANT FONCTION IMPORTANT
let index

trash.forEach((el, idx) =>{
    el.addEventListener('click', () => {
        index = idx
        openModal();
    })
})


btnYes.addEventListener('click', (event) => {
    event.preventDefault();
    const id = dataId[index].dataset.poubelle;
    const baseHref = document.URL;
    const endPoint = `${baseHref}/remove/${id}`;

    // APPELLE AJAX SUR L'ENDPOINT 
    axios.post(endPoint).then((res) => {
        console.log(res);
        const domToRemove = document.querySelector(`.tr-${id}`);
        domToRemove.remove();
        closeModal();
        Toastify({
                text: "Saisie bien supprimé",
                duration: 5000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){}
            }).showToast();
        Ajaxyear();
    })
    .catch((err) => {
        console.log(err);
    })
})

btnNo.addEventListener('click', () => {
     closeModal();
})






  