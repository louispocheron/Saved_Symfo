const btn = document.querySelector('.btn-false');

btn.addEventListener('click', () => {
    Toastify({
                text: "Message bien envoyé",
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
})