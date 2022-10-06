
// EVENT POUR SUPPRIMER UN UTILISATEUR : 
const supprAction = document.querySelectorAll('.last-td-poubelle');
const btnYesAction = document.querySelector('.btn-yes');
const modal = document.querySelector('.modal-adherer'); 

const openModal = () => {
     modal.dataset.active = true;
}
const closeModal = () => {
    delete modal.dataset.active
}


let id
supprAction.forEach((el, idx) => {
    el.addEventListener('click', () => {
         openModal();
         id = el.dataset.id
    })
})

btnYesAction.addEventListener('click', (event) => {
    event.preventDefault(); 
    const baseHref = document.URL;
    const endPoint = `${baseHref}/delete/${id}`;

    axios.post(endPoint).then((response) => {
        console.log(response)
        const trToDelete = document.querySelector( `.tr-${id}`);
        trToDelete.remove();
        closeModal();
        Toastify({
                text: "action bien supprimé",
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

    })
    .catch((error) => { 
        console.log(error)
    })

})
