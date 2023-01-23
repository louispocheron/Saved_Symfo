const btnAdherer = document.querySelector('.btn-adherer');
const href = document.querySelector('.btnAdherer').href;
const hrefQuit = document.querySelector('.btnQuitter').href;
const modal = document.querySelector('.modal-adherer');
const modalUnfollow = document.querySelector('.modal-desadherer')
const btnNo = document.querySelector('.btn-no');
const btnYes = document.querySelector('.btn-yes');
const btnYesQuit = document.querySelector('.btn-yes-quit');
const btnNoQuit = document.querySelector('.btn-no-quit');
const btnQuit = document.querySelector('.btn-quitter');
const background = document.querySelector('.flex-me');




const openModal = () => {
    modal.dataset.active = true;
    background.style.opacity = "0.4";
};

const closeModal = () => {
    delete modal.dataset.active;
    background.style.opacity = "1";

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
                text: "vous êtes déjà adhérent de l'association",
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
            window.alert('Vous devez etre connectez pour adhérer a une association');
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
                    background: "",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        }
    })
})

// console.log(modalUnfollow)

// POUR QUITTER UNE ASSOCIATION 
const openModalUnfollow = () => {
    modalUnfollow.dataset.active = true;
    background.style.opacity = "0.4";

}

const closeModalUnfollow = () => {
    delete modalUnfollow.dataset.active
    background.style.opacity = "1";
}

btnQuit.addEventListener('click', () => {
    openModalUnfollow();
})

btnNoQuit.addEventListener("click", () => {
    closeModalUnfollow();
})


btnYesQuit.addEventListener("click", (event) => {
    event.preventDefault();
    axios.get(hrefQuit).then((res) => {
        const adherant = res.data.adherant
        if(adherant){
            closeModalUnfollow();
            Toastify({
                text: "Vous avez bien quitté l'association",
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
        else{
            closeModalUnfollow();
            Toastify({
                text: "Vous n'êtes pas adherent de l'association",
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
})



