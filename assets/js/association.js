const btnAdherer = document.querySelector('.btn-adherer');
const href = document.querySelector('.btnAdherer').href;
const modal = document.querySelector('.modal-adherer');
const btnNo = document.querySelector('.btn-no');
const btnYes = document.querySelector('.btn-yes');


const openModal = () => {
    modal.dataset.active = true;
};

const closeModal = () => {
    delete modal.dataset.active;
};


btnAdherer.addEventListener("click", () => {
    openModal();
})


btnNo.addEventListener("click", () => {
    closeModal();
})

btnYes.addEventListener('click', (event) => {
    event.preventDefault();
    axios.get(href).then((res) => {
        if(res.data.adherer == true){
            closeModal();
            Toastify({
                text: "vous avez bien adhéré",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        }
        else{
            closeModal()
            Toastify({
                text: "vous êtes deja adhérant de l'association",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                     // red as default
                    background: "linear-gradient(315deg, #bbf0f3 0%, #f6d285 74%)",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        }
    })
    .catch((err) => {
        if(err.response.status === 403){
            window.alert('vous devez etre connectez pour adhérer a une association');
        }
        else{
            closeModal();
            Toastify({
                text: "une erreur est survenue, réessayez plus tard",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                     // red as default
                    background: "linear-gradient(315deg, #3f0d12 0%, #a71d31 74%)",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        }
    })
})