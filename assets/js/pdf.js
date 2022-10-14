const wrapper = document.querySelector('.wrapper');

let options = {
    image: {
        type: 'png'
    },
    html2canvas: { 
        scale: 2
    },
};

const generatePdf = () => {
    html2pdf(wrapper)
    .set(options)
    .from(wrapper)
    .save();  
}


// generatePdf();   