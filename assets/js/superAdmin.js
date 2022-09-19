console.log("superAdmin");

const modal = document.querySelector('.modal-adherer');
const btnNo = document.querySelector('.btn-no');
const btnYes = document.querySelector('.btn-yes');
const buttonForModal = document.querySelectorAll('.change-admin-btn');

const openModal = () => {
     modal.dataset.active = true;
}
const closeModal = () => {
    delete modal.dataset.active
}

btnNo.addEventListener('click', () => closeModal());

let index
buttonForModal.forEach((el, idx) => {
    el.addEventListener('click', () => {
        openModal();
        index = idx
    })
})

btnYes.addEventListener('click', (event) => {
    // event.preventDefault();
    const id = buttonForModal[index].dataset.id;
    const baseHref = document.URL;
    const endPoint = `${baseHref}/${id}/endpoint`;
    
    axios.post(endPoint).then((response) => {
        console.log(response);
        closeModal();
         Toastify({
                text: "Administrateur bien changé !",
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
        console.log(error);
    })
})
